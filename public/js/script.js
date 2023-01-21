// api log


const allApi = document.querySelectorAll('.apiDetailMod')

const logmodel = document.querySelector('.logmodel')
const close = document.querySelector('.close').addEventListener('click', function(){
    logmodel.style.display = 'none'
})


function showDetail(apimodel){
    logmodel.style.display = 'block'
    allApi.forEach((item)=>{
        if(apimodel.getAttribute('data-type') === item.getAttribute('data-type-api')){
            item.style.display = 'flex'
        }else{
            item.style.display = 'none'
        }
    })
   
}

const comment = document.querySelector('.commentmodel')

const commentclose = document.querySelector('.commentclose').addEventListener('click', function(){
    comment.style.display = 'none'
})
function showComment(commentmodel){
    comment.style.display = 'block'
    console.log(commentmodel.getAttribute('data-type-comment'))
}

