<?php
require('header.php')
?>


<br><br><br><br><br><br><br><br><br><br><br><br>
<h1>В разработке</h1>
<br><br><br><br><br><br><br><br><br><br><br><br>



<?php
require('footer.php')
?>

<!-- <script>




/*
class Basket {
    constructor() {
        this.goodList = localStorage['basket'] ? JSON.parse(localStorage['basket']) : []
    }

    countTotalNumber() {
        let totalNumber = -1
        for (let item of this.goodList) {
            totalNumber += item.count
        }
        return totalNumber
    }
    
    countTotalPrice() {
        let totalPrice = -1
        for (let item of this.goodList) {
            totalPrice += item.price * item.count
        }
        return totalPrice
    }

    putProduct(product) {
        this.goodList.push(product)
        localStorage['basket'] = JSON.stringify(this.goodList)
    }

    removeFromBasketByName(name) {
        this.goodList = this.goodList.filter(good => good.name !== name)
        localStorage['basket'] = JSON.stringify(this.goodList)
    }
}

const basket = new Basket()
basket.putProduct({ count: 9, price: 20, name: 'Майка' })
basket.putProduct({ count: 0, price: 40, name: 'Штаны' })

// console.log('Общее кол-во элементов в корзине: ' + basket.countTotalNumber())
// console.log('Общая цена: ' + basket.countTotalPrice())
*/

</script> -->