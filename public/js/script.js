function itemImageChange(img){

    var MainImage = document.getElementById("ItemImage");
    var thisImage=MainImage.src;
    MainImage.src=img.src;
img.src=thisImage;
}
