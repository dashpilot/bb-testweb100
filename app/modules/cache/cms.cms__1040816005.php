<?php if(auth()): ?>

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
/>

<script
  type="module"
  crossorigin
  src="https://blogbird-svelte.vercel.app/assets/index.js"
></script>
<link
  rel="stylesheet"
  href="https://blogbird-svelte.vercel.app/assets/index.css"
/>

<script>
  cfg = {
    img_width: 500,
    gal_width: 900,
    ssr: true,
    page: "<?php echo $this->e($page) ?>",
    data_url: "/",
    img_url: "",
    hard_refresh: true,
    hide_publish: true,
  };
</script>
<?php endif; ?>