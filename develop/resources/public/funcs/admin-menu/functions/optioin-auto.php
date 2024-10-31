<input type="hidden" value="" name="options">
<script>
  const options = document.querySelector('.custom_option [name="options"]');
  const name_el = document.querySelectorAll('.custom_option [name]');
  let name_ary = [];
  
  name_el.forEach(element => {
    let el_type = element.getAttribute('type');
    let el_name = element.getAttribute('name');
    if(el_type === null || el_type.search(/hidden|submit/) === -1) {
      name_ary.push(el_name);
    }
  });

  options.setAttribute('value', name_ary.join(','));
</script>