<script>
  window.category = new Array();

  <?php
    
    $categories = get_categories( array(
      'orderby' => 'name',
      'order'   => 'ASC'
    ) );
   
   # echo var_dump($categories);

    $js_array = json_encode($categories);
    echo "var categories = ". $js_array . ";\n";
   ?>
</script>