
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["id_credito" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["credito" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["url_f" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["img" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["estilo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["banner" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["slogan" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["titulo_1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["texto_1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["titulo_2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["texto_2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["titulo_3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["texto_3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["texto_requisitos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["url_f_simulador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_credito" + iSeqRow] && scEventControl_data["id_credito" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_credito" + iSeqRow] && scEventControl_data["id_credito" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["credito" + iSeqRow] && scEventControl_data["credito" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["credito" + iSeqRow] && scEventControl_data["credito" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["url_f" + iSeqRow] && scEventControl_data["url_f" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["url_f" + iSeqRow] && scEventControl_data["url_f" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["img" + iSeqRow] && scEventControl_data["img" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["img" + iSeqRow] && scEventControl_data["img" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estilo" + iSeqRow] && scEventControl_data["estilo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estilo" + iSeqRow] && scEventControl_data["estilo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow] && scEventControl_data["descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow] && scEventControl_data["descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["banner" + iSeqRow] && scEventControl_data["banner" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["banner" + iSeqRow] && scEventControl_data["banner" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["slogan" + iSeqRow] && scEventControl_data["slogan" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["slogan" + iSeqRow] && scEventControl_data["slogan" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["titulo_1" + iSeqRow] && scEventControl_data["titulo_1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo_1" + iSeqRow] && scEventControl_data["titulo_1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["texto_1" + iSeqRow] && scEventControl_data["texto_1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["texto_1" + iSeqRow] && scEventControl_data["texto_1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["titulo_2" + iSeqRow] && scEventControl_data["titulo_2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo_2" + iSeqRow] && scEventControl_data["titulo_2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["texto_2" + iSeqRow] && scEventControl_data["texto_2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["texto_2" + iSeqRow] && scEventControl_data["texto_2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["titulo_3" + iSeqRow] && scEventControl_data["titulo_3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo_3" + iSeqRow] && scEventControl_data["titulo_3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["texto_3" + iSeqRow] && scEventControl_data["texto_3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["texto_3" + iSeqRow] && scEventControl_data["texto_3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["texto_requisitos" + iSeqRow] && scEventControl_data["texto_requisitos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["texto_requisitos" + iSeqRow] && scEventControl_data["texto_requisitos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["url_f_simulador" + iSeqRow] && scEventControl_data["url_f_simulador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["url_f_simulador" + iSeqRow] && scEventControl_data["url_f_simulador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_status" + iSeqRow] && scEventControl_data["id_status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_status" + iSeqRow] && scEventControl_data["id_status" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("id_status" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_id_credito' + iSeqRow).bind('blur', function() { sc_form_creditos_id_credito_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_creditos_id_credito_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_creditos_id_credito_onfocus(this, iSeqRow) });
  $('#id_sc_field_credito' + iSeqRow).bind('blur', function() { sc_form_creditos_credito_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_creditos_credito_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_creditos_credito_onfocus(this, iSeqRow) });
  $('#id_sc_field_url_f' + iSeqRow).bind('blur', function() { sc_form_creditos_url_f_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_creditos_url_f_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_creditos_url_f_onfocus(this, iSeqRow) });
  $('#id_sc_field_img' + iSeqRow).bind('blur', function() { sc_form_creditos_img_onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_creditos_img_onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_creditos_img_onfocus(this, iSeqRow) });
  $('#id_sc_field_estilo' + iSeqRow).bind('blur', function() { sc_form_creditos_estilo_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_creditos_estilo_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_creditos_estilo_onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion' + iSeqRow).bind('blur', function() { sc_form_creditos_descripcion_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_creditos_descripcion_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_creditos_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_banner' + iSeqRow).bind('blur', function() { sc_form_creditos_banner_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_creditos_banner_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_creditos_banner_onfocus(this, iSeqRow) });
  $('#id_sc_field_slogan' + iSeqRow).bind('blur', function() { sc_form_creditos_slogan_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_creditos_slogan_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_creditos_slogan_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo_1' + iSeqRow).bind('blur', function() { sc_form_creditos_titulo_1_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_creditos_titulo_1_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_creditos_titulo_1_onfocus(this, iSeqRow) });
  $('#id_sc_field_texto_1' + iSeqRow).bind('blur', function() { sc_form_creditos_texto_1_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_creditos_texto_1_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_creditos_texto_1_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo_2' + iSeqRow).bind('blur', function() { sc_form_creditos_titulo_2_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_creditos_titulo_2_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_creditos_titulo_2_onfocus(this, iSeqRow) });
  $('#id_sc_field_texto_2' + iSeqRow).bind('blur', function() { sc_form_creditos_texto_2_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_creditos_texto_2_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_creditos_texto_2_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo_3' + iSeqRow).bind('blur', function() { sc_form_creditos_titulo_3_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_creditos_titulo_3_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_creditos_titulo_3_onfocus(this, iSeqRow) });
  $('#id_sc_field_texto_3' + iSeqRow).bind('blur', function() { sc_form_creditos_texto_3_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_creditos_texto_3_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_creditos_texto_3_onfocus(this, iSeqRow) });
  $('#id_sc_field_texto_requisitos' + iSeqRow).bind('blur', function() { sc_form_creditos_texto_requisitos_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_creditos_texto_requisitos_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_creditos_texto_requisitos_onfocus(this, iSeqRow) });
  $('#id_sc_field_url_f_simulador' + iSeqRow).bind('blur', function() { sc_form_creditos_url_f_simulador_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_creditos_url_f_simulador_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_creditos_url_f_simulador_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_status' + iSeqRow).bind('blur', function() { sc_form_creditos_id_status_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_creditos_id_status_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_creditos_id_status_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_creditos_id_credito_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_id_credito();
  scCssBlur(oThis);
}

function sc_form_creditos_id_credito_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_id_credito_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_credito_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_credito();
  scCssBlur(oThis);
}

function sc_form_creditos_credito_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_credito_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_url_f_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_url_f();
  scCssBlur(oThis);
}

function sc_form_creditos_url_f_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_url_f_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_img_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_img();
  scCssBlur(oThis);
}

function sc_form_creditos_img_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_img_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_estilo_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_estilo();
  scCssBlur(oThis);
}

function sc_form_creditos_estilo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_estilo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_descripcion();
  scCssBlur(oThis);
}

function sc_form_creditos_descripcion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_banner_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_banner();
  scCssBlur(oThis);
}

function sc_form_creditos_banner_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_banner_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_slogan_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_slogan();
  scCssBlur(oThis);
}

function sc_form_creditos_slogan_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_slogan_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_titulo_1_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_titulo_1();
  scCssBlur(oThis);
}

function sc_form_creditos_titulo_1_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_titulo_1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_texto_1_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_texto_1();
  scCssBlur(oThis);
}

function sc_form_creditos_texto_1_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_texto_1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_titulo_2_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_titulo_2();
  scCssBlur(oThis);
}

function sc_form_creditos_titulo_2_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_titulo_2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_texto_2_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_texto_2();
  scCssBlur(oThis);
}

function sc_form_creditos_texto_2_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_texto_2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_titulo_3_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_titulo_3();
  scCssBlur(oThis);
}

function sc_form_creditos_titulo_3_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_titulo_3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_texto_3_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_texto_3();
  scCssBlur(oThis);
}

function sc_form_creditos_texto_3_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_texto_3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_texto_requisitos_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_texto_requisitos();
  scCssBlur(oThis);
}

function sc_form_creditos_texto_requisitos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_texto_requisitos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_url_f_simulador_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_url_f_simulador();
  scCssBlur(oThis);
}

function sc_form_creditos_url_f_simulador_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_url_f_simulador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_creditos_id_status_onblur(oThis, iSeqRow) {
  do_ajax_form_creditos_validate_id_status();
  scCssBlur(oThis);
}

function sc_form_creditos_id_status_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_creditos_id_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("id_credito", "", status);
	displayChange_field("credito", "", status);
	displayChange_field("url_f", "", status);
	displayChange_field("img", "", status);
	displayChange_field("estilo", "", status);
	displayChange_field("descripcion", "", status);
	displayChange_field("banner", "", status);
	displayChange_field("slogan", "", status);
	displayChange_field("titulo_1", "", status);
	displayChange_field("texto_1", "", status);
	displayChange_field("titulo_2", "", status);
	displayChange_field("texto_2", "", status);
	displayChange_field("titulo_3", "", status);
	displayChange_field("texto_3", "", status);
	displayChange_field("texto_requisitos", "", status);
	displayChange_field("url_f_simulador", "", status);
	displayChange_field("id_status", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_id_credito(row, status);
	displayChange_field_credito(row, status);
	displayChange_field_url_f(row, status);
	displayChange_field_img(row, status);
	displayChange_field_estilo(row, status);
	displayChange_field_descripcion(row, status);
	displayChange_field_banner(row, status);
	displayChange_field_slogan(row, status);
	displayChange_field_titulo_1(row, status);
	displayChange_field_texto_1(row, status);
	displayChange_field_titulo_2(row, status);
	displayChange_field_texto_2(row, status);
	displayChange_field_titulo_3(row, status);
	displayChange_field_texto_3(row, status);
	displayChange_field_texto_requisitos(row, status);
	displayChange_field_url_f_simulador(row, status);
	displayChange_field_id_status(row, status);
}

function displayChange_field(field, row, status) {
	if ("id_credito" == field) {
		displayChange_field_id_credito(row, status);
	}
	if ("credito" == field) {
		displayChange_field_credito(row, status);
	}
	if ("url_f" == field) {
		displayChange_field_url_f(row, status);
	}
	if ("img" == field) {
		displayChange_field_img(row, status);
	}
	if ("estilo" == field) {
		displayChange_field_estilo(row, status);
	}
	if ("descripcion" == field) {
		displayChange_field_descripcion(row, status);
	}
	if ("banner" == field) {
		displayChange_field_banner(row, status);
	}
	if ("slogan" == field) {
		displayChange_field_slogan(row, status);
	}
	if ("titulo_1" == field) {
		displayChange_field_titulo_1(row, status);
	}
	if ("texto_1" == field) {
		displayChange_field_texto_1(row, status);
	}
	if ("titulo_2" == field) {
		displayChange_field_titulo_2(row, status);
	}
	if ("texto_2" == field) {
		displayChange_field_texto_2(row, status);
	}
	if ("titulo_3" == field) {
		displayChange_field_titulo_3(row, status);
	}
	if ("texto_3" == field) {
		displayChange_field_texto_3(row, status);
	}
	if ("texto_requisitos" == field) {
		displayChange_field_texto_requisitos(row, status);
	}
	if ("url_f_simulador" == field) {
		displayChange_field_url_f_simulador(row, status);
	}
	if ("id_status" == field) {
		displayChange_field_id_status(row, status);
	}
}

function displayChange_field_id_credito(row, status) {
    var fieldId;
}

function displayChange_field_credito(row, status) {
    var fieldId;
}

function displayChange_field_url_f(row, status) {
    var fieldId;
}

function displayChange_field_img(row, status) {
    var fieldId;
}

function displayChange_field_estilo(row, status) {
    var fieldId;
}

function displayChange_field_descripcion(row, status) {
    var fieldId;
}

function displayChange_field_banner(row, status) {
    var fieldId;
}

function displayChange_field_slogan(row, status) {
    var fieldId;
}

function displayChange_field_titulo_1(row, status) {
    var fieldId;
}

function displayChange_field_texto_1(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_texto_1__obj");
			for (var i = 0; i < fieldList.length; i++) {
				fieldId = $(fieldList[i]).attr("id").substr(12);
                scAjaxExecFieldEditorHtml('mceRemoveControl', false, fieldId);
                scAjaxExecFieldEditorHtml('mceAddControl', false, fieldId);
			}
		}
		else {
            scAjaxExecFieldEditorHtml('mceRemoveControl', false, "texto_1");
            scAjaxExecFieldEditorHtml('mceAddControl', false, "texto_1");
		}
	}
}

function displayChange_field_titulo_2(row, status) {
    var fieldId;
}

function displayChange_field_texto_2(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_texto_2__obj");
			for (var i = 0; i < fieldList.length; i++) {
				fieldId = $(fieldList[i]).attr("id").substr(12);
                scAjaxExecFieldEditorHtml('mceRemoveControl', false, fieldId);
                scAjaxExecFieldEditorHtml('mceAddControl', false, fieldId);
			}
		}
		else {
            scAjaxExecFieldEditorHtml('mceRemoveControl', false, "texto_2");
            scAjaxExecFieldEditorHtml('mceAddControl', false, "texto_2");
		}
	}
}

function displayChange_field_titulo_3(row, status) {
    var fieldId;
}

function displayChange_field_texto_3(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_texto_3__obj");
			for (var i = 0; i < fieldList.length; i++) {
				fieldId = $(fieldList[i]).attr("id").substr(12);
                scAjaxExecFieldEditorHtml('mceRemoveControl', false, fieldId);
                scAjaxExecFieldEditorHtml('mceAddControl', false, fieldId);
			}
		}
		else {
            scAjaxExecFieldEditorHtml('mceRemoveControl', false, "texto_3");
            scAjaxExecFieldEditorHtml('mceAddControl', false, "texto_3");
		}
	}
}

function displayChange_field_texto_requisitos(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_texto_requisitos__obj");
			for (var i = 0; i < fieldList.length; i++) {
				fieldId = $(fieldList[i]).attr("id").substr(12);
                scAjaxExecFieldEditorHtml('mceRemoveControl', false, fieldId);
                scAjaxExecFieldEditorHtml('mceAddControl', false, fieldId);
			}
		}
		else {
            scAjaxExecFieldEditorHtml('mceRemoveControl', false, "texto_requisitos");
            scAjaxExecFieldEditorHtml('mceAddControl', false, "texto_requisitos");
		}
	}
}

function displayChange_field_url_f_simulador(row, status) {
    var fieldId;
}

function displayChange_field_id_status(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_status__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_status" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_status");
	}
}

function scRecreateSelect2() {
	displayChange_field_id_status("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_creditos_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(21);
		}
	}
}
                var scJQHtmlEditorData = (function() {
                    var data = {};
                    function scJQHtmlEditorData(a, b) {
                        if (a) {
                            if (typeof(a) === typeof({})) {
                                for (var d in a) {
                                    if (a.hasOwnProperty(d)) {
                                        data[d] = a[d];
                                    }
                                }
                            } else if ((typeof(a) === typeof('')) || (typeof(a) === typeof(1))) {
                                if (b) {
                                    data[a] = b;
                                } else {
                                    if (typeof(a) === typeof('')) {
                                        var v = data;
                                        a = a.split('.');
                                        a.forEach(function (r) {
                                            v = v[r];
                                        });
                                        return v;
                                    }
                                    return data[a];
                                }
                            }
                        }
                        return data;
                    }
                    return scJQHtmlEditorData;
                }());
 function scJQHtmlEditorAdd(iSeqRow) {
<?php
$sLangTest = '';
if(is_file('../_lib/lang/arr_langs_tinymce.php'))
{
    include('../_lib/lang/arr_langs_tinymce.php');
    if(isset($Nm_arr_lang_tinymce[ $this->Ini->str_lang ]))
    {
        $sLangTest = $Nm_arr_lang_tinymce[ $this->Ini->str_lang ];
    }
}
if(empty($sLangTest))
{
    $sLangTest = 'en_GB';
}
?>
 var baseData = {
  theme: "silver",
  browser_spellcheck : true,
  paste_data_images : true,
<?php
if ('novo' != $this->nmgp_opcao && isset($this->nmgp_cmp_readonly['texto_1']) && $this->nmgp_cmp_readonly['texto_1'] == 'on')
{
    unset($this->nmgp_cmp_readonly['texto_1']);
?>
   readonly: true,
<?php
}
else 
{
?>
   readonly: false,
<?php
}
?>
<?php
if ('yyyymmdd' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%Y{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d";
}
elseif ('mmddyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
elseif ('ddmmyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
else {
    $tinymceDateFormat = "%D";
}
?>
  insertdatetime_formats: ["%H:%M:%S", "%Y-%m-%d", "%I:%M:%S %p", "<?php echo $tinymceDateFormat ?>"],
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  language : '<?php echo $sLangTest; ?>',
  plugins : 'advlist print hr  autolink link image lists charmap preview anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table directionality emoticons template',
  contextmenu: 'link linkchecker image imagetools table spellchecker configurepermanentpen',
  toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  statusbar : false,
  menubar : 'file edit insert view format table tools',
  toolbar_items_size: 'small',
  content_style: ".mce-container-body {text-align: center !important}",
  selector: "#texto_1" + iSeqRow,
  toolbar_mode: 'sliding',
  block_unsupported_drop: false,
  paste_data_images : true,
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  setup: function(ed) {
    ed.on("init", function (e) {
      if ($('textarea[name="texto_1' + iSeqRow + '"]').prop('disabled') == true) {
        ed.setMode("readonly");
      }
    });
  }
 };
 var data = 'function' === typeof Object.assign ? Object.assign({}, scJQHtmlEditorData(baseData)) : baseData;
 tinyMCE.init(data);
 var baseData = {
  theme: "silver",
  browser_spellcheck : true,
  paste_data_images : true,
<?php
if ('novo' != $this->nmgp_opcao && isset($this->nmgp_cmp_readonly['texto_2']) && $this->nmgp_cmp_readonly['texto_2'] == 'on')
{
    unset($this->nmgp_cmp_readonly['texto_2']);
?>
   readonly: true,
<?php
}
else 
{
?>
   readonly: false,
<?php
}
?>
<?php
if ('yyyymmdd' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%Y{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d";
}
elseif ('mmddyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
elseif ('ddmmyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
else {
    $tinymceDateFormat = "%D";
}
?>
  insertdatetime_formats: ["%H:%M:%S", "%Y-%m-%d", "%I:%M:%S %p", "<?php echo $tinymceDateFormat ?>"],
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  language : '<?php echo $sLangTest; ?>',
  plugins : 'advlist print hr  autolink link image lists charmap preview anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table directionality emoticons template',
  contextmenu: 'link linkchecker image imagetools table spellchecker configurepermanentpen',
  toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  statusbar : false,
  menubar : 'file edit insert view format table tools',
  toolbar_items_size: 'small',
  content_style: ".mce-container-body {text-align: center !important}",
  selector: "#texto_2" + iSeqRow,
  toolbar_mode: 'sliding',
  block_unsupported_drop: false,
  paste_data_images : true,
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  setup: function(ed) {
    ed.on("init", function (e) {
      if ($('textarea[name="texto_2' + iSeqRow + '"]').prop('disabled') == true) {
        ed.setMode("readonly");
      }
    });
  }
 };
 var data = 'function' === typeof Object.assign ? Object.assign({}, scJQHtmlEditorData(baseData)) : baseData;
 tinyMCE.init(data);
 var baseData = {
  theme: "silver",
  browser_spellcheck : true,
  paste_data_images : true,
<?php
if ('novo' != $this->nmgp_opcao && isset($this->nmgp_cmp_readonly['texto_3']) && $this->nmgp_cmp_readonly['texto_3'] == 'on')
{
    unset($this->nmgp_cmp_readonly['texto_3']);
?>
   readonly: true,
<?php
}
else 
{
?>
   readonly: false,
<?php
}
?>
<?php
if ('yyyymmdd' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%Y{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d";
}
elseif ('mmddyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
elseif ('ddmmyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
else {
    $tinymceDateFormat = "%D";
}
?>
  insertdatetime_formats: ["%H:%M:%S", "%Y-%m-%d", "%I:%M:%S %p", "<?php echo $tinymceDateFormat ?>"],
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  language : '<?php echo $sLangTest; ?>',
  plugins : 'advlist print hr  autolink link image lists charmap preview anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table directionality emoticons template',
  contextmenu: 'link linkchecker image imagetools table spellchecker configurepermanentpen',
  toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  statusbar : false,
  menubar : 'file edit insert view format table tools',
  toolbar_items_size: 'small',
  content_style: ".mce-container-body {text-align: center !important}",
  selector: "#texto_3" + iSeqRow,
  toolbar_mode: 'sliding',
  block_unsupported_drop: false,
  paste_data_images : true,
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  setup: function(ed) {
    ed.on("init", function (e) {
      if ($('textarea[name="texto_3' + iSeqRow + '"]').prop('disabled') == true) {
        ed.setMode("readonly");
      }
    });
  }
 };
 var data = 'function' === typeof Object.assign ? Object.assign({}, scJQHtmlEditorData(baseData)) : baseData;
 tinyMCE.init(data);
 var baseData = {
  theme: "silver",
  browser_spellcheck : true,
  paste_data_images : true,
<?php
if ('novo' != $this->nmgp_opcao && isset($this->nmgp_cmp_readonly['texto_requisitos']) && $this->nmgp_cmp_readonly['texto_requisitos'] == 'on')
{
    unset($this->nmgp_cmp_readonly['texto_requisitos']);
?>
   readonly: true,
<?php
}
else 
{
?>
   readonly: false,
<?php
}
?>
<?php
if ('yyyymmdd' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%Y{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d";
}
elseif ('mmddyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
elseif ('ddmmyyyy' == $_SESSION['scriptcase']['reg_conf']['date_format']) {
    $tinymceDateFormat = "%d{$_SESSION['scriptcase']['reg_conf']['date_sep']}%m{$_SESSION['scriptcase']['reg_conf']['date_sep']}%Y";
}
else {
    $tinymceDateFormat = "%D";
}
?>
  insertdatetime_formats: ["%H:%M:%S", "%Y-%m-%d", "%I:%M:%S %p", "<?php echo $tinymceDateFormat ?>"],
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  language : '<?php echo $sLangTest; ?>',
  plugins : 'advlist print hr  autolink link image lists charmap preview anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table directionality emoticons template',
  contextmenu: 'link linkchecker image imagetools table spellchecker configurepermanentpen',
  toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  statusbar : false,
  menubar : 'file edit insert view format table tools',
  toolbar_items_size: 'small',
  content_style: ".mce-container-body {text-align: center !important}",
  selector: "#texto_requisitos" + iSeqRow,
  toolbar_mode: 'sliding',
  block_unsupported_drop: false,
  paste_data_images : true,
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  setup: function(ed) {
    ed.on("init", function (e) {
      if ($('textarea[name="texto_requisitos' + iSeqRow + '"]').prop('disabled') == true) {
        ed.setMode("readonly");
      }
    });
  }
 };
 var data = 'function' === typeof Object.assign ? Object.assign({}, scJQHtmlEditorData(baseData)) : baseData;
 tinyMCE.init(data);
} // scJQHtmlEditorAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_creditos')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "id_status" == specificField) {
    scJQSelect2Add_id_status(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_id_status(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_status_obj" : "#id_sc_field_id_status" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_status_obj',
      dropdownCssClass: 'css_id_status_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQHtmlEditorAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_status) { displayChange_field_id_status(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}

