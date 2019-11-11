/**
 * Ajax call to save clicks
 */
$(".page-btn").on('click', function(){
	let pageId = this.getAttribute('data-click-id');

	$.ajax({
       url: 'counter.php',
       dataType: 'json',
       data: { page: pageId} ,
       complete: function(){
			//$(".contentLog").load(location.href + " .contentLog");
       }
    });
});

