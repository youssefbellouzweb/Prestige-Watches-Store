document.addEventListener("DOMContentLoaded", () => {
    const plus = document.getElementById("plus");
    const minus = document.getElementById("minus");
    const totalItems = document.getElementById("totalItems");
    // const name_product = document.getElementById("name_product").value;
    // const price = document.getElementById("price").value;

    document
        .getElementById("avec_emballage")
        .addEventListener("click", function () {
            const price = document.getElementById("price").value;
            const price_packaging =
                document.getElementById("price_packaging").value;
            const emballages = document.getElementsByName("emballage");

            if (
                emballages[0].checked &&
                emballages[0].value == "avec_emballage"
            ) {
                document.getElementById("price-product").innerHTML =
                    price_packaging + "DH";
            } else {
                document.getElementById("price-product").innerHTML =
                    parseFloat(price) + "DH";
            }
        });

    document
        .getElementById("formSubmitBtn")
        .addEventListener("click", function () {
            const name = document.getElementById("name").value;
            const phone = document.getElementById("phone").value;
            const address = document.getElementById("address").value;
            const ville = document.getElementById("ville").value;
            const name_product = document.getElementById("name_product").value;
            const price = document.getElementById("price").value;
            const price_packaging =
                document.getElementById("price_packaging").value;
            const totalItems = document.getElementById("totalItems").value;
            const emballages = document.getElementsByName("emballage");
            const numberphone = +212622314644;
            // i will chnge number phone

            for (i = 0; i < emballages.length; i++) {
                if (
                    emballages[i].checked &&
                    emballages[i].value == "avec_emballage"
                ) {
                    document.getElementById("price-product").innerHTML =
                        parseFloat(price_packaging);
                    // alert(emballages[i].value)
                    const message = `Nom et Prénom: ${name}\nNuméro de Téléphone: ${phone}\nAdresse: ${address}\nCity: ${ville}\nProduct Name: ${name_product}\nPrice: ${price_packaging}\nQuantity: ${parseInt(
                        totalItems
                    )}\nPrix Total: ${
                        parseFloat(price_packaging) * parseInt(totalItems)
                    }DH\n`;
                    const whatsappUrl = `https://wa.me/${numberphone}?text=${encodeURIComponent(
                        message
                    )}`;
                    window.location.href = whatsappUrl;
                } else {
                    document.getElementById("price-product").innerHTML =
                        parseFloat(price);
                    const message = `Nom et Prénom: ${name}\nNuméro de Téléphone: ${phone}\nAdresse: ${address}\nCity: ${ville}\nProduct Name: ${name_product}\nPrice: ${price}\nQuantity: ${parseInt(
                        totalItems
                    )}\nPrix Total: ${
                        parseFloat(price) * parseInt(totalItems)
                    }DH\n`;
                    const whatsappUrl = `https://wa.me/${numberphone}?text=${encodeURIComponent(
                        message
                    )}`;
                    window.location.href = whatsappUrl;
                }
            }
        });

    plus.addEventListener(
        "click",
        () => (totalItems.value = Math.max(1, ++totalItems.value))
    );
    minus.addEventListener(
        "click",
        () => (totalItems.value = Math.max(1, --totalItems.value))
    );

    document.querySelectorAll(".smallpictures").forEach((picture) => {
        picture.addEventListener("click", () => {
            document
                .querySelector(".smallpictures.active")
                ?.classList.remove("active");
            picture.classList.add("active");
            document.getElementById("emphasisPicture").src = picture.src;
        });
    });

    document.getElementById("btn").addEventListener("click", () => {
        const Sneakers = {
            name: "Fall Limited Edition Sneakers",
            value: 125.0,
            amount: totalItems.value,
            src: "./images/image-product-1-thumbnail.jpg",
            id: 1,
        };
        localStorage.setItem("cart", JSON.stringify(Sneakers));
        showItemOnCart();
    });

    function showItemOnCart() {
        const cart = localStorage.getItem("cart");
        const cartBoxProducts = document.getElementById("products");
        const checkout = document.getElementById("checkout");

        if (cart) {
            cartBoxProducts.innerHTML = "";
            checkout.classList.remove("detail-hide");
            const cartProduct = JSON.parse(cart);

            cartBoxProducts.innerHTML = `
            <div class='detail-product'>
                <div class='detail-description'>
                    <img class='detail-productImg' src='${cartProduct.src}' />
                    <div class='detail-info'>
                        <h3>${cartProduct.name}</h3>
                        <span class='detail-singleValue'>$${cartProduct.value.toFixed(
                            2
                        )}</span>
                        <span class='detail-amount'>x ${
                            cartProduct.amount
                        }</span>
                        <span class='detail-finalValue'>$${(
                            cartProduct.value * cartProduct.amount
                        ).toFixed(2)}</span>
                    </div>
                    <div class='detail-remove' onclick='clearCart()'>
                        <img src='./images/icon-delete.svg'>
                    </div>
                </div>
            </div>`;
        } else {
            cartBoxProducts.innerHTML =
                "<span class='detail-emptyCart'>Your cart is empty.</span>";
            checkout.classList.add("detail-hide");
        }
    }

    function clearCart() {
        localStorage.removeItem("cart");
        showItemOnCart();
    }

    document.getElementById("cartIcon").addEventListener("click", () => {
        const cartBox = document.getElementById("cart-box");
        cartBox.classList.toggle("detail-hide");
        showItemOnCart();
    });

    showItemOnCart();
});
