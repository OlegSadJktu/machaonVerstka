divisionTable()

const regexp = new RegExp('bso*',)
myStr = 'ba be bo bsoooo'

console.log(myStr.match(regexp))

vkLink = document.getElementById('mainIndex')



function moreDetails(item) {
    let elem = document.getElementById(item)
    let queryElem = $('#'+item)
    let transition = Number((queryElem).css('transition-duration').replace('s', ''))


    if (queryElem.css('overflow') === 'visible') {
        queryElem.css({'overflow':'hidden', 'max-height':'0'})

    } else {
        queryElem.css('max-height', '2000px')

        setTimeout(() => queryElem.css('overflow', 'visible'), transition * 1000)


    }
}

function divisionTable(){
    // let arrayOfGridTables = $('.grid-tables')
    let arrayOfGridTables = document.getElementsByClassName('grid-tables')
    console.log(arrayOfGridTables)
    for (i=0; i < arrayOfGridTables.length; i++){
        arrayOfGridTables[i].style.display = 'grid'
        arrayOfGridTables[i].style.gridTemplateColumns = arrayOfGridTables[i].getAttribute('data-columns')
    }
}








$('#top-bottom').click(function(){
    if ($('#top-bottom').text() == 'top') {
        $('#top-bottom').text('bottom')
        $('#block-field1').css('top', '')
    } else {
        $('#top-bottom').text('top')
        $('#block-field1').css('bottom', '')
    }
    position()
})
$('#left-right').click(function(){
    if ($('#left-right').text() == 'left') {
        $('#left-right').text('right')
        $('#block-field1').css('left', '')
    } else {
        $('#left-right').text('left')
        $('#block-field1').css('right', '')
    }
    position();
})
function position() {
    $('#block-field1').css('position', $('#position1').val());
    $('#block-field1').css($('#top-bottom').text(), $('#top1').val());
    $('#block-field1').css($('#left-right').text(), $('#left1').val());
}
$('#position-form').on('input', function(){
    $('#block-field1').css('position', $('#position1').val());
    $('#block-field1').css($('#top-bottom').text(), $('#top1').val());
    $('#block-field1').css($('#left-right').text(), $('#left1').val());
})
function positionSubstitute(arg){
    $('#position1').val($(`#position-insert${arg}`).text());
    position()
}
function topSubstitute(arg){
    $('#top1').val($(`#top-insert${arg}`).text());
    position()
}

