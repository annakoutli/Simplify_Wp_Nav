/* Clean up the admin sidebar navigation *************************************************/
function remove_admin_menu_items() {
  $remove_menu_items = array(__('Posts'),__('Comments'),__('Testimonials'),__('Team'),__('Benefits'),__('Slideshows'),__('Photo'),__('Partners'));
  global $menu;
  end ($menu);
  while (prev($menu)){
    $item = explode(' ',$menu[key($menu)][0]);
    if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
      unset($menu[key($menu)]);}
    }
  }
add_action('admin_menu', 'remove_admin_menu_items');