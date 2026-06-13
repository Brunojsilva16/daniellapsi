/**
 * Google Apps Script para receber os dados do formulário da home.php
 * e salvar na planilha Google Sheets.
 *
 * 1) Cole o ID da sua planilha em SPREADSHEET_ID.
 *    Exemplo: https://docs.google.com/spreadsheets/d/ID_DA_PLANILHA/edit
 *
 * 2) Publique como Web App:
 *    Implantar > Nova implantação > App da Web
 *    Executar como: você
 *    Quem tem acesso: qualquer pessoa
 *
 * 3) Copie a URL /exec da implantação e coloque no .env do site:
 *    GOOGLE_SCRIPT_URL=https://script.google.com/macros/s/SEU_ID/exec
 */
const SPREADSHEET_ID = 'COLE_AQUI_O_ID_DA_PLANILHA';

// Deixe vazio para salvar na primeira aba da planilha aberta.
// Se quiser uma aba específica, coloque o nome aqui, por exemplo: 'Leads'.
const SHEET_NAME = '';

const HEADERS = [
  'Data/Hora',
  'Nome',
  'Email',
  'Telefone',
  'Como posso te ajudar?',
  'Formato da sessão',
  'Mensagem'
];

function doPost(e) {
  const lock = LockService.getScriptLock();
  lock.waitLock(10000);

  try {
    const spreadsheet = getSpreadsheet_();
    const sheet = getSheet_(spreadsheet);
    ensureHeaders_(sheet);

    const params = getParams_(e);

    const rowData = [
      new Date(),
      sanitize_(params.nome) || 'Não informado',
      sanitize_(params.email) || 'Não informado',
      sanitize_(params.telefone) || 'Não informado',
      sanitize_(params.assunto) || 'Não informado',
      sanitize_(params.formato_sessao) || 'Não informado',
      sanitize_(params.mensagem) || 'Não informado'
    ];

    sheet.appendRow(rowData);
    sheet.autoResizeColumns(1, HEADERS.length);

    return jsonResponse_({
      status: 'success',
      message: 'Lead salvo com sucesso.'
    });
  } catch (error) {
    return jsonResponse_({
      status: 'error',
      message: error && error.message ? error.message : String(error)
    });
  } finally {
    lock.releaseLock();
  }
}

function doGet() {
  return jsonResponse_({
    status: 'online',
    message: 'Web App ativo. Use POST para salvar leads.'
  });
}

function testarEnvioManual() {
  const fakeEvent = {
    parameter: {
      nome: 'Teste Daniella',
      email: 'teste@email.com',
      telefone: '(81) 99999-9999',
      assunto: 'Psicoterapia',
      formato_sessao: 'Online',
      mensagem: 'Linha de teste criada pelo Apps Script.'
    }
  };

  const response = doPost(fakeEvent);
  Logger.log(response.getContent());
}

function getSpreadsheet_() {
  if (SPREADSHEET_ID && SPREADSHEET_ID !== 'COLE_AQUI_O_ID_DA_PLANILHA') {
    return SpreadsheetApp.openById(SPREADSHEET_ID);
  }

  const activeSpreadsheet = SpreadsheetApp.getActiveSpreadsheet();

  if (!activeSpreadsheet) {
    throw new Error('Informe o ID da planilha na constante SPREADSHEET_ID.');
  }

  return activeSpreadsheet;
}

function getSheet_(spreadsheet) {
  if (SHEET_NAME) {
    let sheet = spreadsheet.getSheetByName(SHEET_NAME);

    if (!sheet) {
      sheet = spreadsheet.insertSheet(SHEET_NAME);
    }

    return sheet;
  }

  const sheets = spreadsheet.getSheets();

  if (!sheets || sheets.length === 0) {
    return spreadsheet.insertSheet('Leads');
  }

  return sheets[0];
}

function ensureHeaders_(sheet) {
  const currentValues = sheet.getRange(1, 1, 1, HEADERS.length).getValues()[0];
  const hasDifferentHeader = HEADERS.some(function (header, index) {
    return String(currentValues[index] || '').trim() !== header;
  });

  if (sheet.getLastRow() === 0 || hasDifferentHeader) {
    sheet.getRange(1, 1, 1, HEADERS.length).setValues([HEADERS]);
    sheet.getRange(1, 1, 1, HEADERS.length).setFontWeight('bold');
    sheet.setFrozenRows(1);
  }
}

function getParams_(e) {
  if (!e) {
    return {};
  }

  if (e.parameter && Object.keys(e.parameter).length > 0) {
    return e.parameter;
  }

  if (e.postData && e.postData.contents) {
    try {
      return JSON.parse(e.postData.contents);
    } catch (error) {
      return {};
    }
  }

  return {};
}

function sanitize_(value) {
  if (value === null || value === undefined) {
    return '';
  }

  return String(value).trim();
}

function jsonResponse_(payload) {
  return ContentService
    .createTextOutput(JSON.stringify(payload))
    .setMimeType(ContentService.MimeType.JSON);
}
