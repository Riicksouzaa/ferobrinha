<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 12/10/2018
 * Time: 14:04
 */

/**
 * @param $status
 * @param $msg
 * @return array
 */
function getStatus ($status, $msg)
{
    $data = [];
    $data['error'] = $status;
    $data['msg'] = $msg;
    return $data;
}


/**
 * @function $insere_nova_category
 *
 * @param $name
 * @param $desc
 * @param $txt
 * @return string
 */
$insere_nova_category = function ($name, $desc, $txt) use ($SQL) {
    if (strlen($name) >= 3) {
        if (strlen($desc) >= 3) {
            $query = $SQL->prepare("INSERT INTO atr_wikki_category
                                              (nome, descricao, text)
                                               VALUES (:n, :d, :t);");
            $query->execute(['n' => utf8_encode($name), 'd' => utf8_encode($desc), 't' => utf8_encode($txt)]);
            $data = getStatus(FALSE, "inserido com sucesso.");
            $query = $SQL->query("SELECT a.id_atr_wikki_category FROM atr_wikki_category a order by a.id_atr_wikki_category desc;")->fetch();
            $data['id'] = $query['id_atr_wikki_category'];
            return json_encode($data);
        } else {
            $data = getStatus(TRUE, "É Necessário que a descrição tenha 3 ou mais caracteres.");
            return json_encode($data);
        }
    } else {
        $data = getStatus(TRUE, "È necessário inserir um nome com pelo menos 3 caracteres.");
        return json_encode($data);
    }
};

/**
 * @param $id
 * @param $name
 * @param $desc
 * @param $txt
 * @return string
 */
$edita_category = function ($id, $name, $desc, $txt) use ($SQL) {
    $query = $SQL->prepare("UPDATE atr_wikki_category SET nome = :n, descricao = :d, text = :txt where id_atr_wikki_category = :id");
    $query->execute(['n' => utf8_encode($name), 'd' => utf8_encode($desc), 'txt' => utf8_encode($txt), 'id' => utf8_encode($id)]);
    $data = getStatus(FALSE, "Updated.");
    return json_encode($data);
};

if ($_POST) {
    $type = $_POST['type'];
    switch ($type) {
        case 1:
            $name = $_POST['name'];
            $desc = $_POST['desc'];
            $txt = $_POST['txt'];
            
            echo $insere_nova_category($name, $desc, $txt);
            die();
            break;
        case 2:
            $id = $_POST['id'];
            $name = $_POST['name'];
            $desc = $_POST['desc'];
            $txt = $_POST['txt'];
            
            echo $edita_category($id, $name, $desc, $txt);
            
            die();
            break;
        default:
            header("Location: ./");
            break;
    }
    
} else {
    
    $main_content .= $make_double_archs("Wikki Painel");
    $step = $_REQUEST['step'];
    switch ($step) {
        case 'edit':
            if ($_REQUEST['id']) {
                $id = (int)intval($_REQUEST['id']);
                $category_by_id = $SQL->prepare("SELECT * FROM atr_wikki_category where id_atr_wikki_category = :id");
                $category_by_id->execute(['id' => $id]);
                $category_by_id->setFetchMode(PDO::FETCH_ASSOC);
                if ($category_by_id->rowCount() > 0) {
                    $voltar .= '<a style="color: white; margin-right: 5px;" href="?subtopic=adminpanel&action=manage_wikki&step=edit">Voltar</a>';
                    //Tiny Editor
                    $main_content .= '
<script type="text/javascript" src="' . $layout_name . '/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
        tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        // Style formats
        style_formats : [
            {title : \'Bold text\', inline : \'b\'},
            {title : \'Red text\', inline : \'span\', styles : {color : \'#ff0000\'}},
            {title : \'Red header\', block : \'h1\', styles : {color : \'#ff0000\'}},
            {title : \'Example 1\', inline : \'span\', classes : \'example1\'},
            {title : \'Example 2\', inline : \'span\', classes : \'example2\'},
            {title : \'Table styles\'},
            {title : \'Table row 1\', selector : \'tr\', classes : \'tablerow1\'}
        ],

        // Replace values for the template plugin
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });
</script>';
                    
                    
                    $main_content .= '<div class="TableContainer">';
                    $main_content .= $make_content_header("Editar Categoria", $voltar);
                    $main_content .= $make_table_header('Table3', '', TRUE);
                    $cat_values = $category_by_id->fetch();
                    foreach ($cat_values as $key => $value) {
                        $cat_values[$key] = utf8_encode($value);
                    }
                    $main_content .= '
<form action="" method="post">
    <input type="hidden" value="2" name="type">
    <input type="hidden" value="' . $id . '" name="id">
    <tr>
        <td>Nome:</td>
        <td><input type="text" name="name" value="' . $cat_values['nome'] . '" placeholder="Insira o nome" autofocus></td>
    </tr>
    <tr>
        <td> Descrição:</td>
        <td> <input type="text" name="desc" value="' . $cat_values['descricao'] . '" placeholder="Insira uma descrição"></td>
    </tr>
    <tr>
        <td>Text:</td>
        <td><textarea rows=20 cols=55 name="txt">' . $cat_values['text'] . '</textarea></td>
    </tr>
    <tr><td colspan="2" style="text-align: center"><button type="submit">Editar A Bagacera</button></td></tr>
</form>

';
                    $main_content .= $make_table_footer();
                    $main_content .= '</div>';
                }
            } else {
                $query = $SQL->prepare("SELECT * FROM atr_wikki_category");
                $query->execute([]);
                $query->setFetchMode(PDO::FETCH_ASSOC);
                
                $category = $query->fetchAll();
                foreach ($category as $key => $value) {
                    $main_content .= '
                    <div style="text-align: center">
                        <a href="?subtopic=adminpanel&action=manage_wikki&step=edit&id=' . $value['id_atr_wikki_category'] . '">
                            <div style="text-align: center; padding: 30px; border: grey solid 3px">' . $value['nome'] . '</div> <br>
                        </a>
                    </div>
                    ';
                }
                $main_content .= '
                    <div style="text-align: center">
                        <a href="?subtopic=adminpanel&action=manage_wikki">
                            <div style="text-align: center; padding: 30px; border: grey solid 3px">voltar</div> <br>
                        </a>
                    </div>
                    ';
            }
            break;
        case 'add':
            //Tiny Editor
            $main_content .= '
<script type="text/javascript" src="' . $layout_name . '/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
        tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        // Style formats
        style_formats : [
            {title : \'Bold text\', inline : \'b\'},
            {title : \'Red text\', inline : \'span\', styles : {color : \'#ff0000\'}},
            {title : \'Red header\', block : \'h1\', styles : {color : \'#ff0000\'}},
            {title : \'Example 1\', inline : \'span\', classes : \'example1\'},
            {title : \'Example 2\', inline : \'span\', classes : \'example2\'},
            {title : \'Table styles\'},
            {title : \'Table row 1\', selector : \'tr\', classes : \'tablerow1\'}
        ],

        // Replace values for the template plugin
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });
</script>';
            
            
            $main_content .= '<div class="TableContainer">';
            $voltar .= '<a style="color: white; margin-right: 5px;" href="?subtopic=adminpanel&action=manage_wikki">Voltar</a>';
            $main_content .= $make_content_header("ADD NEW CATEGORY", $voltar);
            $main_content .= $make_table_header('Table3', '', TRUE);
            $main_content .= '
<form action="./?subtopic=adminpanel&action=manage_wikki" id="wikki_cat_insert" method="post">
    <input type="hidden" value="1" name="type">
    <tr>
        <td>Nome:</td>
        <td><input type="text" name="name" id="form-name" placeholder="Insira o nome" autofocus></td>
    </tr>
    <tr>
        <td> Descrição:</td>
        <td><input type="text" name="desc" id="form-desc" placeholder="Insira uma descrição"></td>
    </tr>
    <tr>
        <td>Text:</td>
        <td>
            <textarea rows=20 cols=55 id="form-txt" name="txt">
            
            </textarea>
        </td>
    </tr>
    <tr><td colspan="2" style="text-align: center"><button type="submit">Inserir A Bagacera</button></td></tr>
</form>
';
            $main_content.='
<script>
$("#wikki_cat_insert").submit(function () {
  tinyMCE.triggerSave();
  var form = $(this);
  var data = form.serialize();
  var url = form.attr("action");
  var type = form.attr("method");
  console.log(form, data);
  $.ajax({
    url: url,
    data: data,
    type: type,
    dataType: "json",
    beforeSend: function () {
      iziToast.error({
        title: "...:",
        message: "LOADING...",
        position: "topRight", // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
        timeout: 2500
      });
    },
    success: function (response) {
      if (response.error === true) {
        iziToast.error({
          title: "ERROR:",
          message: response.msg,
          position: "topRight", // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
          timeout: 2500
        });
      } else {
        $(".se-pre-con").fadeOut("slow");
        iziToast.success({
          title: "Success:",
          message: response.msg,
          position: "topRight",
          timeout: 2500,
          onClosing: function (instance, toast, closedBy) {
            window.location.replace("./?subtopic=wikki&cat=" + response.id);
          }
        });
      }
    }
  });
  return false;
});
</script>
            ';
            $main_content .= $make_table_footer();
            $main_content .= '</div>';
            break;
        default:
            $main_content .= '
                    <div style="text-align: center">
                        <a href="./?subtopic=adminpanel&action=manage_wikki&step=add">
                            <div style="text-align: center; padding: 30px; border: grey solid 3px">ADD</div> <br>
                        </a>
                    </div>
                    ';
            $main_content .= '
                    <div style="text-align: center">
                        <a href="./?subtopic=adminpanel&action=manage_wikki&step=edit">
                            <div style="text-align: center; padding: 30px; border: grey solid 3px">EDITAR</div> <br>
                        </a>
                    </div>
                    ';
            break;
    }
}