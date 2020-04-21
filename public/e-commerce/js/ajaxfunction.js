// $(document).ready(
//     function () {
//         $('.cart_quantity_up').on('click', function () {
//             valu = parseInt($('.cart_quantity_input').val())
//
//             $('.cart_quantity_input').val(valu+1)
//         })
//         $('.cart_quantity_down').on('click', function () {
//             valu = parseInt($('.cart_quantity_input').val())
//
//             $('.cart_quantity_input').val(valu-1)
//         })
//         $('.cart_quantity_input').change(function () {
//             alert('hi')
//
//         });
//     }
// )


// document.getElementsByClassName('qty').addEventListener('submit',QtyUpdate);
// function QtyUpdate(e) {
//     e.preventDefault();
//     var qty = document.getElementsByClassName('cart_quantity_input').value;
//     var id = document.getElementsByClassName('id').value;
//     var rowId = document.getElementsByClassName('rowId').value;
//
//     var url='/'+id
//     var xhr= new XMLHttpRequest();
//     xhr.open('POST',url,true);
//     xhr.setRequestHeader('Content-type','application/x-www-formurlencoded')
//     xhr.setRequestHeader('X-CSRF-TOKEN','meta[name="csrf-token"]')
//     xhr.onload = function(){
//
//         if(this.status==200){
//             console.log(this.responseText)
//         }
//
//     }
//     xhr.send();
//     xhr.onerror = function () {
//         console.log('omething goes wrong....');
//
//     }
//
//
//
// }

//ajax quantity
(function() {
const quantity= document.querySelectorAll('.quantity')
const atc= document.querySelectorAll('.add-to-cart')


    Array.from(quantity).forEach(function(element) {
        const id = element.getAttribute('data-id')
        const data_route = element.getAttribute('data-route')
        element.addEventListener('change', function () {

            axios.patch('cart/'+id, {
                qty:this.value,

            }).then(
                function (response) {
                    // window.location.href = data_route
                    window.alert(response.data)

                }
            ).catch(
                function (error) {
                    console.log(error);

                }
            )
        })


    })

        //remove product using axios
    // Array.from(atc).forEach(function(element) {
    //
    //     const id = element.getAttribute('data-id')
    //     //const data_route = element.getAttribute('data-route')
    //
    //     //
    //     element.addEventListener('click', function () {
    //
    //         axios.delete('cart/'+id, {
    //             id:id
    //
    //         }).then(
    //             function (response) {
    //                 // window.location.href = data_route
    //                 window.alert(response.data)
    //             }
    //         ).catch(
    //             function (error) {
    //                 console.log(error);
    //
    //             }
    //         )
    //     })
    //
    //
    // })
})();


