<!doctype html>
<html>
 <body>
 
   <table border='0'>

     <!-- City -->
     <tr>
       <td>Universitas</td>
       <td>
         <select id='sel_univ'>
           <option>-- Select Universitas --</option>
           <?php
           foreach($universitas as $univ){
             echo "<option value='".$univ['univ_id']."'>".$univ['univ_nama']."</option>";
           }
           ?>
        </select>
      </td>
    </tr>

    <!-- Department -->
    <tr>
      <td>Fakultas</td>
      <td>
        <select id='sel_fakultas'>
          <option>-- Select Fakultas --</option>
        </select>
      </td>
    </tr>

    <!-- User -->
    <tr>
      <td>Prodi</td>
      <td>
        <select id='sel_prodi'>
          <option>-- Select Prodi --</option>
        </select>
      </td>
    </tr>
  </table>
 
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
 
  $(document).ready(function(){
 
    // City change
    $('#sel_univ').change(function(){
      var univ_id = $(this).val();

      // AJAX request
      $.ajax({
        url:'<?=base_url()?>index.php/C_search/getFakultas',
        method: 'post',
        data: {univ_id: univ_id},
        dataType: 'json',
        success: function(response){

          // Remove options 
          $('#sel_prodi').find('option').not(':first').remove();
          $('#sel_fakultas').find('option').not(':first').remove();

          // Add options
          $.each(response,function(index,data){
             $('#sel_fakultas').append('<option value="'+data['fakultas_id']+'">'+data['fakultas_nama']+'</option>');
          });
        }
     });
   });
 
   // Department change
   $('#sel_fakultas').change(function(){
     var fakultas_id = $(this).val();

     // AJAX request
     $.ajax({
       url:'<?=base_url()?>index.php/C_search/getProdi',
       method: 'post',
       data: {fakultas_id: fakultas_id},
       dataType: 'json',
       success: function(response){
 
         // Remove options
         $('#sel_prodi').find('option').not(':first').remove();

         // Add options
         $.each(response,function(index,data){
           $('#sel_prodi').append('<option value="'+data['prodi_id']+'">'+data['prodi_nama']+'</option>');
         });
       }
    });
  });
 
 });
 </script>
 </body>
</html>
<br><br><br>
<?php
  echo anchor('c_logout/logout','Logout');
?>