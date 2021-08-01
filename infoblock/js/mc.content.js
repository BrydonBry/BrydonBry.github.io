$(document).ready(function(){
	$('.infoblock.pictext.text-right,.infoblock.pictext.text-left').each(function(){
		var h=0,$title=$(this).find('.title');
		if($title.length>0)h=$title.eq(0).height();
		$(this).find('.text').css({marginTop:h})
	});
	$('.productsItem').each(function(){
		var a=$(this).find('.read-more'),b='<a href="'+a.attr('href')+'" title="'+a.attr('title')+'" />';
		$(this).find('img,.h3').wrap(b);
	});
});
