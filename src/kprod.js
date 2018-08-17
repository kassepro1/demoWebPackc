import $ from 'jquery'
       
 const getProByCat = (onDataReiceved)=>{
    $.ajax({
        method: "GET",
        url:'http://localhost/webPackDemo/Controller/CategorieController.php?action=getProduit',
        dataType: "json",
        data: { idcat: 1 },
        async: true,
        success: function (result) {
            onDataReiceved(result)
            $.each(result, function(key, value){
                $('#tbProd').append('<tr><td>'+value.designation +'</td></tr>');

                console.log(value.designation);        
                 });
           
        },
    })
}
 export default getProByCat;		 
   