// darkmode start
function ubahmode(){
    const ubah = document.body;
    ubah.classList.toggle("dark");

}
// darkmode end 

// addeventlistener show image merk start
const button = document.getElementById('btn-merk');
button.addEventListener("click",function show_image() { 
    const x = document.getElementById('gambar-merk');
    
    if(x.style.display == 'none'){
        x.style.display = 'block';
    }else{
        x.style.display = 'none';
    }
});
// addeventlistener show image merk end

//pop up box start
document.querySelector('.input-button').addEventListener("click",function cari(){
    alert("Maaf Barang Kosong !!!");
});
//pop up box start

//jquery start

// $("button").click(function(){

//     $("#gambar-merk").$("#gambar-merk").slideDown();
// }
 
//  );
//jquery end

