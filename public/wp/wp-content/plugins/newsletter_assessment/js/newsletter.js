function getCookie(name) {
  let cookie = {};
  document.cookie.split(';').forEach(function(el) {
    let [k,v] = el.split('=');
    cookie[k.trim()] = v;
  })
  return cookie[name];
}


jQuery(document).ready(function(){
  if(getCookie('newsletter_status') == 1){
    jQuery('.newsletter-modal').remove();
  }else{
    jQuery('.newsletter-modal').show();
  }
});
