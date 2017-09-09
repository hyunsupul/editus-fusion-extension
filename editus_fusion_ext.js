jQuery(document).ready(function($){
        // the following lines insert a function to the Editus filter list
    if (lasso_editor.filterArray) {
        lasso_editor.filterArray.push(fusionTab);
    } else {
        lasso_editor.filterArray = [fusionTab];
    }
     
    function fusionTab(content)
	{
		if (content.indexOf('fusion_tab') ==-1) return content;
		var $temp = $('<div></div>').html( content );
		//var tabs = $temp.find('.tab-link');
		var tabPanes = $temp.find('.tab-pane');
		var i2 =0;
		var rePattern = /\[fusion_tab .+?\]([\s\S]*?)\[\/fusion_tab\]/g;
		content = content.replace(rePattern, function(match, cont) {
		    if (cont.indexOf('[') !=-1) return match;
			var sc = match.replace(cont, tabPanes[i2].innerHTML);
			i2++;
			return sc;
		});
			
		return content;
	}
	
});