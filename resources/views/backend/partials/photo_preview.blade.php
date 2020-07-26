<!--
        Use this for HTML
-->
{{---<div class="form-row" id="img">
        <div class="col-md-4 form-group position-relative">
                <span class="block_me" style="height: 100%; width: 100%; top: 0; position: absolute; left: 0; display: none;"></span>
                <label for="image">{{ __('backend/default.photo') }} <span class="text-danger">*</span></label>
                <input type="file" class="form-control img_" name="image[]" id="image" required>
                <img class="image_preview position-absolute img_prv" src="">
        </div>
</div>--}}





<!--
        Use this for SCRIPT
-->
<script type="text/javascript">
	
	$('body').on('click','.img_',function(){
		$(this).change(function(){
			$('.img_prv').attr('src', window.URL.createObjectURL(this.files[0]));


                        /**-----------------------------------------**\
                        *                                            *
                        *       Remove comments for Multi-Image      *
                        *                                            *
                        \**-----------------------------------------**/

        		//$('.img_prv').removeClass('img_prv');
        		//$(this).removeClass('img_');
        		$(this).prev().prev().css("display", "block");
        		//$(this).attr('readonly','""');
        		var newImage = "<div class=\"col-md-4 form-group\">\n" +
        		"					<span class=\"block_me\" style=\"height: 100%; width: 100%; top: 0; position: absolute; left: 0; display: none;\"></span>" +
        		"					<label for=\"image\"> <span class=\"text-danger\">&nbsp;</span> </label>\n" +
        		"					<input type=\"file\" class=\"form-control img_\" name=\"image[]\">\n" +
        		"					<img class=\"image_preview position-absolute img_prv\" src=\"\">" +
        		"               </div>";
        		//$("#img").append(newImage);
        	});
	});
</script>