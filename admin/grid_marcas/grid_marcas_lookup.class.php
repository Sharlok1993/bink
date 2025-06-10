<?php
class grid_marcas_lookup
{
//  
   function lookup_id_status(&$id_status) 
   {
      $conteudo = "" ; 
      if ($id_status == "1")
      { 
          $conteudo = "Activo";
      } 
      if ($id_status == "2")
      { 
          $conteudo = "Inactivo";
      } 
      if (!empty($conteudo)) 
      { 
          $id_status = $conteudo; 
      } 
   }  
}
?>
