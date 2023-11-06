// var closeBtn = document.getElementById("closeBtn")
// var yellowDiv = document.getElementById("yellowTop")
// function closeYellow() {
//     yellowDiv.style.display = "none";
// }


// closeBtn.addEventListener("click", closeYellow);
$(window).on('load', function() {
    $('#myModal').modal('show');
  });

let exCards = document.getElementsByClassName("ex-student-card")
exCards.forEach(exCard => {

    let exName = exCard.firstElementChild
    let info = exCard.lastElementChild

    exCard.addEventListener("mouseenter", () => {
        let pos = 0;
        let id = null;
        clearInterval(id);

        id = setInterval(frame, 20)
        function frame() {
            if (pos == 30) {
                clearInterval(id);
            } else {
                pos++;
                info.style.bottom = pos + 'px';
            }
        }

        info.style.display = "block";
        exName.style.display = "none";

    })
    exCard.addEventListener("mouseleave", () => {
        info.style.display = "none";
        exName.style.display = "block"
    })

});


    // pop-up modal
    // setTimeout(function(){
    //     document.getElementById('myModal').classList.remove('hide');
    //     }, 3000);
    // document.getElementById("closeBtn").addEventListener("click", closeFunction)
    // function closeFunction(){
    //     document.getElementById('myModal').classList.add('hide');
    // }
