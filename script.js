var speechRecognition = window.webkitSpeechRecognition

var recognition = new SpeechRecognition()
var textbox1 = $("#textbox")

var content = ''
recognition.continuous = true

//recognition os started

recognition.onstart = function(){
       instruction.text("Voice recognition is on")
}
recognition.onspeechend = function(){
        instruction.text("no activity")
}
recognition.onerror = function(){
        instruction.text("try again")
}
recognition.onresult = function(event){
        var current = event.resultIndex

        var transcript = event.results[current][0].transcript

        content+= transcript
        
        textbox1.val(content)
}
$("#start-btn").click(function (event){
        if(content.length){
            content+=''
        }
        recognition.start()
})

textbox1.on('input',function(){
    content = $(this).val()
})