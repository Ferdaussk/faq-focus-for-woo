"use strict"
// accordion maker============
function accordionMaker(accordion, accordionItems, activeClass) {
    for (let singleItem of accordionItems) {

        let itemButton = singleItem.querySelector('div')
        itemButton.addEventListener('click', function() {
            let buttonParent = this.parentElement;

            if (buttonParent.classList.contains(activeClass)) {
                buttonParent.classList.remove(activeClass);
                for (let item of accordionItems) {
                    item.classList.remove(activeClass);
                }
            } else {
                for (let item of accordionItems) {
                    item.classList.remove(activeClass);
                }
                buttonParent.classList.add(activeClass);
            }

        })
    }


    function documentClickToActiveClass(e) {
        let isClick = accordion.contains(e.target);


        if ((!isClick)) {
            for (let singleItem of accordionItems) {
                singleItem.classList.remove(activeClass);
            }

        }
    }
    document.addEventListener('click', documentClickToActiveClass)

}


// accordion one=======================
const accordionOneItems = document.querySelectorAll('.qaffw-Accordion-1 .qaffw-Accordion-default')

const accordionOne = document.querySelector('.qaffw-Accordion-1')
accordionMaker(accordionOne, accordionOneItems, 'active')


// accordion two=======================
const accordionTwoItems = document.querySelectorAll('.qaffw-Accordion-2 .qaffw-Accordion-default')

const accordionTwo = document.querySelector('.qaffw-Accordion-2')
accordionMaker(accordionTwo, accordionTwoItems, 'active')


// accordion three=======================
const accordionThreeItems = document.querySelectorAll('.qaffw-Accordion-3 .qaffw-Accordion-default')

const accordionThree = document.querySelector('.qaffw-Accordion-3')
accordionMaker(accordionThree, accordionThreeItems, 'active')


// accordion Four=======================
const accordionFourItems = document.querySelectorAll('.qaffw-Accordion-4 .qaffw-Accordion-default')

const accordionFour = document.querySelector('.qaffw-Accordion-4')
accordionMaker(accordionFour, accordionFourItems, 'active')


// accordion Five=======================
const accordionFiveItems = document.querySelectorAll('.qaffw-Accordion-5 .qaffw-Accordion-default')

const accordionFive = document.querySelector('.qaffw-Accordion-5')
accordionMaker(accordionFive, accordionFiveItems, 'active')


// accordion Six=======================
const accordionSixItems = document.querySelectorAll('.qaffw-Accordion-6 .qaffw-Accordion-default')

const accordionSix = document.querySelector('.qaffw-Accordion-6')
accordionMaker(accordionSix, accordionSixItems, 'active')


// accordion Seven=======================
const accordionSevenItems = document.querySelectorAll('.qaffw-Accordion-7 .qaffw-Accordion-default')

const accordionSeven = document.querySelector('.qaffw-Accordion-7')
accordionMaker(accordionSeven, accordionSevenItems, 'active')

// accordion Eight=======================
const accordionEIghtItems = document.querySelectorAll('.qaffw-Accordion-8 .qaffw-Accordion-default')

const accordionEIght = document.querySelector('.qaffw-Accordion-8')
accordionMaker(accordionEIght, accordionEIghtItems, 'active')


// accordion NIne=======================
const accordionNineItems = document.querySelectorAll('.qaffw-Accordion-9 .qaffw-Accordion-default')

const accordionNine = document.querySelector('.qaffw-Accordion-9')
accordionMaker(accordionNine, accordionNineItems, 'active')


// accordion Ten=======================
const accordionTenItems = document.querySelectorAll('.qaffw-Accordion-10 .qaffw-Accordion-default')

const accordionTen = document.querySelector('.qaffw-Accordion-10')
accordionMaker(accordionTen, accordionTenItems, 'active')



// accordion Eleven=======================
const accordionElevenItems = document.querySelectorAll('.qaffw-Accordion-11 .qaffw-Accordion-default')

const accordionEleven = document.querySelector('.qaffw-Accordion-11')
accordionMaker(accordionEleven, accordionElevenItems, 'active')



// accordion Twelve=======================
const accordionTwelveItems = document.querySelectorAll('.qaffw-Accordion-12 .qaffw-Accordion-default')

const accordionTwelve = document.querySelector('.qaffw-Accordion-12')
accordionMaker(accordionTwelve, accordionTwelveItems, 'active')

// accordion Thirteen=======================
const accordionThirteenItems = document.querySelectorAll('.qaffw-Accordion-13 .qaffw-Accordion-default')

const accordionThirteen = document.querySelector('.qaffw-Accordion-13')
accordionMaker(accordionThirteen, accordionThirteenItems, 'active')

// accordion Fourteen=======================
const accordionFourteenItems = document.querySelectorAll('.qaffw-Accordion-14 .qaffw-Accordion-default')

const accordionFourteen = document.querySelector('.qaffw-Accordion-14')
accordionMaker(accordionFourteen, accordionFourteenItems, 'active')

// accordion Fifteen=======================
const accordionFifteenItems = document.querySelectorAll('.qaffw-Accordion-15 .qaffw-Accordion-default')

const accordionFifteen = document.querySelector('.qaffw-Accordion-15')
accordionMaker(accordionFifteen, accordionFifteenItems, 'active')


//accordion Sixteen========================

const accordion16 = document.querySelector('.qaffw-Accordion-16')
const accordion16Items = document.querySelectorAll('.qaffw-Accordion-16 .qaffw-Accordion-default')
accordionMaker(accordion16, accordion16Items, 'active')


//accordion 17========================

const accordion17 = document.querySelector('.qaffw-Accordion-17')
const accordion17Items = document.querySelectorAll('.qaffw-Accordion-17 .qaffw-Accordion-default')
accordionMaker(accordion17, accordion17Items, 'active')

//accordion 18========================
const accordion18 = document.querySelector('.qaffw-Accordion-18')
const accordion18Items = document.querySelectorAll('.qaffw-Accordion-18 .qaffw-Accordion-default')
accordionMaker(accordion18, accordion18Items, 'active');

//accordion 19========================
const accordion19 = document.querySelector('.qaffw-Accordion-19')
const accordion19Items = document.querySelectorAll('.qaffw-Accordion-19 .qaffw-Accordion-default')
accordionMaker(accordion19, accordion19Items, 'active');


//accordion 20========================
const accordion20 = document.querySelector('.qaffw-Accordion-20')
const accordion20Items = document.querySelectorAll('.qaffw-Accordion-20 .qaffw-Accordion-default')
accordionMaker(accordion20, accordion20Items, 'active');


//accordion 21========================
const accordion21 = document.querySelector('.qaffw-Accordion-21')
const accordion21Items = document.querySelectorAll('.qaffw-Accordion-21 .qaffw-Accordion-default')
accordionMaker(accordion21, accordion21Items, 'active');


//accordion 22========================
const accordion22 = document.querySelector('.qaffw-Accordion-22')
const accordion22Items = document.querySelectorAll('.qaffw-Accordion-22 .qaffw-Accordion-default')
accordionMaker(accordion22, accordion22Items, 'active');


//accordion 23========================
const accordion23 = document.querySelector('.qaffw-Accordion-23')
const accordion23Items = document.querySelectorAll('.qaffw-Accordion-23 .qaffw-Accordion-default')
accordionMaker(accordion23, accordion23Items, 'active');

//accordion 23========================
const accordion24 = document.querySelector('.qaffw-Accordion-24')
const accordion24Items = document.querySelectorAll('.qaffw-Accordion-24 .qaffw-Accordion-default')
accordionMaker(accordion24, accordion24Items, 'active');

//accordion 23========================
const accordion25 = document.querySelector('.qaffw-Accordion-25')
const accordion25Items = document.querySelectorAll('.qaffw-Accordion-25 .qaffw-Accordion-default')
accordionMaker(accordion25, accordion25Items, 'active');

//accordion 23========================
const accordion26 = document.querySelector('.qaffw-Accordion-26')
const accordion26Items = document.querySelectorAll('.qaffw-Accordion-26 .qaffw-Accordion-default')
accordionMaker(accordion26, accordion26Items, 'active');

//accordion 23========================
const accordion27 = document.querySelector('.qaffw-Accordion-27')
const accordion27Items = document.querySelectorAll('.qaffw-Accordion-27 .qaffw-Accordion-default')
accordionMaker(accordion27, accordion27Items, 'active');

//accordion 23========================
const accordion28 = document.querySelector('.qaffw-Accordion-28')
const accordion28Items = document.querySelectorAll('.qaffw-Accordion-28 .qaffw-Accordion-default')
accordionMaker(accordion28, accordion28Items, 'active');

//accordion 23========================
const accordion29 = document.querySelector('.qaffw-Accordion-29')
const accordion29Items = document.querySelectorAll('.qaffw-Accordion-29 .qaffw-Accordion-default')
accordionMaker(accordion29, accordion29Items, 'active');

//accordion 23========================
const accordion30 = document.querySelector('.qaffw-Accordion-30')
const accordion30Items = document.querySelectorAll('.qaffw-Accordion-30 .qaffw-Accordion-default')
accordionMaker(accordion30, accordion30Items, 'active');

//accordion 23========================
const accordion31 = document.querySelector('.qaffw-Accordion-31')
const accordion31Items = document.querySelectorAll('.qaffw-Accordion-31 .qaffw-Accordion-default')
accordionMaker(accordion31, accordion31Items, 'active');

























