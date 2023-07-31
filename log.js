if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'write Email *tag': function(variable){
        let x = document.getElementById("x");
        x.value = variable;
    },

    'write Password *tag': function(variable){
        let y = document.getElementById("y");
        y.value = variable.split(" ").join("");
    },
    'submit': function(){
      document.getElementById("#submit").click();
  },
  'register': function(){
    window.location.href='registration.php'
  }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}