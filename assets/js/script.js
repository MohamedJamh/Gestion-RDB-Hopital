function show_modal(e)
{
    let element =e;
    document.querySelector('#'+element).removeAttribute("style");
}
function hide_modal(e)
{   
    let element =e;
    if(element==null) document.querySelector('#view-sessionn-modal').setAttribute("style","display:none;");
    else document.querySelector('#'+element).setAttribute("style","display:none;");
    
}

