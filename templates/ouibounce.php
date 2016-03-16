<div id="ouibounce-modal">
  <div class="underlay"></div>
  <div class="modal">
    <div class="modal-title">
      <h3 class="text-center">This is a Ouibounce modal</h3>
    </div>

    <div class="modal-body">
      <p>Thanks for stoping by!</p>
      <p>You can style your Ouibounce modal however you see fit. You can also include big buttons, an email capture or just plain text. The sky's the limit!</p>
      <p>Close this modal by clicking "No Thanks" below or clicking anywhere outside of the modal.</p>

      <?php echo do_shortcode( '[gravityform id="4" title="false" description="false"]' ); ?>
      <?php// for production echo do_shortcode( '[gravityform id="7" title="false" description="false"]' ); ?>
    </div>

    <div class="modal-footer">
      <p>no thanks</p>
    </div>
  </div>
</div>