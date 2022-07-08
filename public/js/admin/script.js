const options = document.querySelectorAll(".option-filter");
const tips = document.querySelector('.tips');
let item = document.querySelectorAll(".item-bill");

// console.log(options);
// xử lý cho filter đã giao
// const handleRecieved =(e)=>{
//     console.log('e',e);
//     console.log(123);
//     let i = 0;
//         Toastify({
//             text: "Lọc đơn hàng thành công!",
//         }).showToast();
//         for (const data of item) {
//             i++;
//             //
//             if (data.getAttribute('data-status') != document.getElementById('recieved').getAttribute('data-status')) {
//                 setTimeout(() => {
//                     data.classList.add('d-none');
//                 }, 25 * i)
//             } else {
//                 setTimeout(() => {
//                     data.classList.remove('d-none');
//                 }, 25 * i)
//             }
//         }

// }
//filter tình trạng đơn hàng
filterOrder = status => {
    let i = 0;
    options[status].addEventListener('click', () => {
        // console.log('status',status);
        Toastify({
            text: "Lọc đơn hàng thành công!",
        }).showToast();
        for (const data of item) {
            i++;
            if (data.getAttribute('data-status') != options[status].getAttribute('data-status')) {
                setTimeout(() => {
                    data.classList.add('d-none');
                }, 25 * i)
            } else {
                setTimeout(() => {
                    data.classList.remove('d-none');
                }, 25 * i)
            }
        }
    });
}

window.addEventListener('click', (e) => {
    if (e.target == document.querySelector('.container')) {
        item.forEach(data => {
            data.classList.remove('d-none');
        })
    }
})

show = () => {
    setTimeout(() => {
        tips.style.opacity = "1";
    }, 1500);
}

hide = () => {
    setTimeout(() => {
        tips.style.opacity = "0";
        setTimeout(() => tips.classList.add("d-none"), 1000);
    }, 5000);
}
filterOrder(0);
filterOrder(1);
filterOrder(2);
filterOrder(3);
show();
hide();

$(document).ready(() => {
    const customer = $("input.customer-input");
    customer.keyup((e) => {
        let keyword = customer.val().toLowerCase();
        item.forEach(data => {
            let title = data.getAttribute('data-customer').toLowerCase();
            if (!title.includes(keyword)) data.classList.add('d-none');
            else data.classList.remove('d-none');
        })
    });
});