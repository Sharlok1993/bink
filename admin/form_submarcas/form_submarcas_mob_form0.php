<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " submarcas"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " submarcas"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_submarcas/form_submarcas_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_submarcas_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['last'] : 'off'); ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       if ("off" == Nav_binicio_macro_disabled) { $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       if ("off" == Nav_bretorna_macro_disabled) { $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       if ("off" == Nav_bfinal_macro_disabled) { $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       if ("off" == Nav_bavanca_macro_disabled) { $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_submarcas_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     if ($('#t').length>0) {
         scQuickSearchKeyUp('t', null);
     }
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchKeyUp(sPos, e) {
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
       else
       {
           $('#SC_fast_search_submit_'+sPos).show();
       }
     }
   }
   function nm_gp_submit_qsearch(pos)
   {
        nm_move('fast_search', pos);
   }
   function nm_gp_open_qsearch_div(pos)
   {
        if (typeof nm_gp_open_qsearch_div_mobile == 'function') {
            return nm_gp_open_qsearch_div_mobile(pos);
        }
        if($('#SC_fast_search_dropdown_' + pos).hasClass('fa-caret-down'))
        {
            if(($('#quicksearchph_' + pos).offset().top+$('#id_qs_div_' + pos).height()+10) >= $(document).height())
            {
                $('#id_qs_div_' + pos).offset({top:($('#quicksearchph_' + pos).offset().top-($('#quicksearchph_' + pos).height()/2)-$('#id_qs_div_' + pos).height()-4)});
            }

            nm_gp_open_qsearch_div_store_temp(pos);
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-down').addClass('fa-caret-up');
        }
        else
        {
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-up').addClass('fa-caret-down');
        }
        $('#id_qs_div_' + pos).toggle();
   }

   var tmp_qs_arr_fields = [], tmp_qs_arr_cond = "";
   function nm_gp_open_qsearch_div_store_temp(pos)
   {
        tmp_qs_arr_fields = [], tmp_qs_str_cond = "";

        if($('#fast_search_f0_' + pos).prop('type') == 'select-multiple')
        {
            tmp_qs_arr_fields = $('#fast_search_f0_' + pos).val();
        }
        else
        {
            tmp_qs_arr_fields.push($('#fast_search_f0_' + pos).val());
        }

        tmp_qs_str_cond = $('#cond_fast_search_f0_' + pos).val();
   }

   function nm_gp_cancel_qsearch_div_store_temp(pos)
   {
        $('#fast_search_f0_' + pos).val('');
        $("#fast_search_f0_" + pos + " option").prop('selected', false);
        for(it=0; it<tmp_qs_arr_fields.length; it++)
        {
            $("#fast_search_f0_" + pos + " option[value='"+ tmp_qs_arr_fields[it] +"']").prop('selected', true);
        }
        $("#fast_search_f0_" + pos).change();
        tmp_qs_arr_fields = [];

        $('#cond_fast_search_f0_' + pos).val(tmp_qs_str_cond);
        $('#cond_fast_search_f0_' + pos).change();
        tmp_qs_str_cond = "";

        nm_gp_open_qsearch_div(pos);
   } if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_submarcas']['error_buffer']) && '' != $_SESSION['scriptcase']['form_submarcas']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_submarcas']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_submarcas_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="form_submarcas_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_submarcas_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_submarcas_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->sc_page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
$this->displayAppHeader();
?>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R")
{
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['fast_search'][2] : "";
          $stateSearchIconClose  = 'none';
          $stateSearchIconSearch = '';
          if(!empty($OPC_dat))
          {
              $stateSearchIconClose  = '';
              $stateSearchIconSearch = 'none';
          }
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input id='fast_search_f0_t' type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <select id='cond_fast_search_f0_t' class="scFormToolbarInput" style="vertical-align: middle;display:none;" name="nmgp_cond_fast_search_t" onChange="change_fast_t = 'CH';">
<?php 
          $OPC_sel = ("qp" == $OPC_arg) ? " selected" : "";
           echo "           <option value='qp'" . $OPC_sel . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
?> 
          </select>
          <span id="quicksearchph_t" class="scFormToolbarInput" style='display: inline-block; vertical-align: inherit'>
              <span>
                  <input type="text" id="SC_fast_search_t" class="scFormToolbarInputText" style="border-width: 0px;;" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">&nbsp;
                  <img style="display: <?php echo $stateSearchIconSearch ?>; "  id="SC_fast_search_submit_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
                  <img style="display: <?php echo $stateSearchIconClose ?>; " id="SC_fast_search_close_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
              </span>
          </span>  </div>
  <?php
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-24';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_submarcas']))
           {
               $this->nmgp_cmp_readonly['id_submarcas'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_submarcas']))
    {
        $this->nm_new_label['id_submarcas'] = "ID";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_submarcas = $this->id_submarcas;
   $sStyleHidden_id_submarcas = '';
   if (isset($this->nmgp_cmp_hidden['id_submarcas']) && $this->nmgp_cmp_hidden['id_submarcas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_submarcas']);
       $sStyleHidden_id_submarcas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_submarcas = 'display: none;';
   $sStyleReadInp_id_submarcas = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_submarcas"]) &&  $this->nmgp_cmp_readonly["id_submarcas"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_submarcas']);
       $sStyleReadLab_id_submarcas = '';
       $sStyleReadInp_id_submarcas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_submarcas']) && $this->nmgp_cmp_hidden['id_submarcas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_submarcas" value="<?php echo $this->form_encode_input($id_submarcas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_id_submarcas_line" id="hidden_field_data_id_submarcas" style="<?php echo $sStyleHidden_id_submarcas; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_submarcas_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_submarcas_label" style=""><span id="id_label_id_submarcas"><?php echo $this->nm_new_label['id_submarcas']; ?></span></span><br><span id="id_read_on_id_submarcas" class="css_id_submarcas_line" style="<?php echo $sStyleReadLab_id_submarcas; ?>"><?php echo $this->form_format_readonly("id_submarcas", $this->form_encode_input($this->id_submarcas)); ?></span><span id="id_read_off_id_submarcas" class="css_read_off_id_submarcas" style="<?php echo $sStyleReadInp_id_submarcas; ?>"><input type="hidden" name="id_submarcas" value="<?php echo $this->form_encode_input($id_submarcas) . "\">"?><span id="id_ajax_label_id_submarcas"><?php echo nl2br($id_submarcas); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_submarcas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_submarcas_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_marca']))
   {
       $this->nm_new_label['id_marca'] = "Marca";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_marca = $this->id_marca;
   $sStyleHidden_id_marca = '';
   if (isset($this->nmgp_cmp_hidden['id_marca']) && $this->nmgp_cmp_hidden['id_marca'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_marca']);
       $sStyleHidden_id_marca = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_marca = 'display: none;';
   $sStyleReadInp_id_marca = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_marca']) && $this->nmgp_cmp_readonly['id_marca'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_marca']);
       $sStyleReadLab_id_marca = '';
       $sStyleReadInp_id_marca = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_marca']) && $this->nmgp_cmp_hidden['id_marca'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_marca" value="<?php echo $this->form_encode_input($this->id_marca) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_marca_line" id="hidden_field_data_id_marca" style="<?php echo $sStyleHidden_id_marca; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_marca_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_marca_label" style=""><span id="id_label_id_marca"><?php echo $this->nm_new_label['id_marca']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_marca"]) &&  $this->nmgp_cmp_readonly["id_marca"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca'] = array(); 
    }

   $old_value_id_submarcas = $this->id_submarcas;
   $this->nm_tira_formatacao();


   $unformatted_value_id_submarcas = $this->id_submarcas;

   $nm_comando = "SELECT id_marca, marca  FROM marcas  ORDER BY marca";

   $this->id_submarcas = $old_value_id_submarcas;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_marca'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_marca_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_marca_1))
          {
              foreach ($this->id_marca_1 as $tmp_id_marca)
              {
                  if (trim($tmp_id_marca) === trim($cadaselect[1])) {$id_marca_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->id_marca) && trim($this->id_marca) === trim($cadaselect[1])) {$id_marca_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="id_marca" value="<?php echo $this->form_encode_input($id_marca) . "\">" . $id_marca_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_marca();
   $x = 0 ; 
   $id_marca_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_marca_1))
          {
              foreach ($this->id_marca_1 as $tmp_id_marca)
              {
                  if (trim($tmp_id_marca) === trim($cadaselect[1])) {$id_marca_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->id_marca) && trim($this->id_marca) === trim($cadaselect[1])) { $id_marca_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_marca_look))
          {
              $id_marca_look = $this->id_marca;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_marca\" class=\"css_id_marca_line\" style=\"" .  $sStyleReadLab_id_marca . "\">" . $this->form_format_readonly("id_marca", $this->form_encode_input($id_marca_look)) . "</span><span id=\"id_read_off_id_marca\" class=\"css_read_off_id_marca" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_id_marca . "\">";
   echo " <span id=\"idAjaxSelect_id_marca\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_id_marca_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_id_marca\" name=\"id_marca\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_marca) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_marca)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_marca_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_marca_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['submarca']))
    {
        $this->nm_new_label['submarca'] = "Submarca";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $submarca = $this->submarca;
   $sStyleHidden_submarca = '';
   if (isset($this->nmgp_cmp_hidden['submarca']) && $this->nmgp_cmp_hidden['submarca'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['submarca']);
       $sStyleHidden_submarca = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_submarca = 'display: none;';
   $sStyleReadInp_submarca = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['submarca']) && $this->nmgp_cmp_readonly['submarca'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['submarca']);
       $sStyleReadLab_submarca = '';
       $sStyleReadInp_submarca = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['submarca']) && $this->nmgp_cmp_hidden['submarca'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="submarca" value="<?php echo $this->form_encode_input($submarca) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_submarca_line" id="hidden_field_data_submarca" style="<?php echo $sStyleHidden_submarca; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_submarca_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_submarca_label" style=""><span id="id_label_submarca"><?php echo $this->nm_new_label['submarca']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["submarca"]) &&  $this->nmgp_cmp_readonly["submarca"] == "on") { 

 ?>
<input type="hidden" name="submarca" value="<?php echo $this->form_encode_input($submarca) . "\">" . $submarca . ""; ?>
<?php } else { ?>
<span id="id_read_on_submarca" class="sc-ui-readonly-submarca css_submarca_line" style="<?php echo $sStyleReadLab_submarca; ?>"><?php echo $this->form_format_readonly("submarca", $this->form_encode_input($this->submarca)); ?></span><span id="id_read_off_submarca" class="css_read_off_submarca<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_submarca; ?>">
 <input class="sc-js-input scFormObjectOdd css_submarca_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_submarca" type=text name="submarca" value="<?php echo $this->form_encode_input($submarca) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=500 alt="{datatype: 'text', maxLength: 500, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_submarca_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_submarca_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_status']))
   {
       $this->nm_new_label['id_status'] = "Status";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_status = $this->id_status;
   $sStyleHidden_id_status = '';
   if (isset($this->nmgp_cmp_hidden['id_status']) && $this->nmgp_cmp_hidden['id_status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_status']);
       $sStyleHidden_id_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_status = 'display: none;';
   $sStyleReadInp_id_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_status']) && $this->nmgp_cmp_readonly['id_status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_status']);
       $sStyleReadLab_id_status = '';
       $sStyleReadInp_id_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_status']) && $this->nmgp_cmp_hidden['id_status'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_status" value="<?php echo $this->form_encode_input($this->id_status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_status_line" id="hidden_field_data_id_status" style="<?php echo $sStyleHidden_id_status; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_status_label" style=""><span id="id_label_id_status"><?php echo $this->nm_new_label['id_status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_status"]) &&  $this->nmgp_cmp_readonly["id_status"] == "on") { 

$id_status_look = "";
 if ($this->id_status == "1") { $id_status_look .= "Activo" ;} 
 if ($this->id_status == "2") { $id_status_look .= "Inactivo" ;} 
 if (empty($id_status_look)) { $id_status_look = $this->id_status; }
?>
<input type="hidden" name="id_status" value="<?php echo $this->form_encode_input($id_status) . "\">" . $id_status_look . ""; ?>
<?php } else { ?>
<?php

$id_status_look = "";
 if ($this->id_status == "1") { $id_status_look .= "Activo" ;} 
 if ($this->id_status == "2") { $id_status_look .= "Inactivo" ;} 
 if (empty($id_status_look)) { $id_status_look = $this->id_status; }
?>
<span id="id_read_on_id_status" class="css_id_status_line"  style="<?php echo $sStyleReadLab_id_status; ?>"><?php echo $this->form_format_readonly("id_status", $this->form_encode_input($id_status_look)); ?></span><span id="id_read_off_id_status" class="css_read_off_id_status<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap; <?php echo $sStyleReadInp_id_status; ?>">
 <span id="idAjaxSelect_id_status" class="<?php echo $this->classes_100perc_fields['span_select'] ?>"><select class="sc-js-input scFormObjectOdd css_id_status_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_id_status" name="id_status" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="1" <?php  if ($this->id_status == "1") { echo " selected" ;} ?>>Activo</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_status'][] = '1'; ?>
 <option  value="2" <?php  if ($this->id_status == "2") { echo " selected" ;} ?>>Inactivo</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['Lookup_id_status'][] = '2'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R")
{
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['birpara']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['birpara']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['birpara']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['birpara']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['birpara'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "birpara", "scBtnFn_sys_GridPermiteSeq('b')", "scBtnFn_sys_GridPermiteSeq('b')", "brec_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['qtline'] == "on")
      {
?> 
          <span class="<?php echo $this->css_css_toolbar_obj ?>" style="border: 0px;"><?php echo $this->Ini->Nm_lang['lang_btns_rows'] ?></span>
          <select class="scFormToolbarInput" name="nmgp_quant_linhas_b" onchange="document.F7.nmgp_max_line.value = this.value; document.F7.submit();"> 
<?php 
              $obj_sel = ($this->sc_max_reg == '1') ? " selected" : "";
?> 
           <option value="1" <?php echo $obj_sel ?>>1</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '10') ? " selected" : "";
?> 
           <option value="10" <?php echo $obj_sel ?>>10</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '20') ? " selected" : "";
?> 
           <option value="20" <?php echo $obj_sel ?>>20</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '50') ? " selected" : "";
?> 
           <option value="50" <?php echo $obj_sel ?>>50</option>
          </select>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-25';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-26';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-27';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-28';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_submarcas_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_submarcas_mob");
 parent.scAjaxDetailHeight("form_submarcas_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_submarcas_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_submarcas_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if (isset($this->scFormFocusErrorName) && '' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-15").length && $("#sc_b_new_t.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-16").length && $("#sc_b_ins_t.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-17").length && $("#sc_b_sai_t.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-18").length && $("#sc_b_upd_t.sc-unique-btn-18").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			 return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-19").length && $("#sc_b_del_t.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-20").length && $("#sc_b_sai_t.sc-unique-btn-20").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-20").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-21").length && $("#sc_b_sai_t.sc-unique-btn-21").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-21").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-22").length && $("#sc_b_sai_t.sc-unique-btn-22").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-22").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-23").length && $("#sc_b_sai_t.sc-unique-btn-23").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-23").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-24").length && $("#sc_b_sai_t.sc-unique-btn-24").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-24").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq(btnPos) {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
		    if ($("#brec_b").hasClass("disabled")) {
		        return;
		    }
			if (document.F1['nmgp_rec_' + btnPos].value != '') {nm_navpage(document.F1['nmgp_rec_' + btnPos].value, 'P');} document.F1['nmgp_rec_' + btnPos].value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			 return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-25").length && $("#sc_b_ini_b.sc-unique-btn-25").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-25").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-26").length && $("#sc_b_ret_b.sc-unique-btn-26").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-26").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-27").length && $("#sc_b_avc_b.sc-unique-btn-27").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-27").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-28").length && $("#sc_b_fim_b.sc-unique-btn-28").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-28").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_submarcas_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
