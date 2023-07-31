if (annyang) {
    // Let's define our first command. First the text we expect, and then the function it should call
    var commands = {
    
      'compose (mail)': function(variable){
        window.location.href="input.php";
    },
    'open chat': function(variable){
        window.location.href="ChatApp/login.php";
    },

    'logout': function(variable){
        window.location.href="login.php";
    },
    'open feedback': function(variable){
        window.location.href="feedback.php";
    },
      'play (message)': function(variable){
         document.getElementById('play').click();
      }
  
    };
  
    // Add our commands to annyang
    annyang.addCommands(commands);
  
    // Start listening. You can call this here, or attach this call to an event, button, etc.
    annyang.start();
  }