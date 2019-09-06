var canvas = document.getElementById("mCanvas");
var ctx = canvas.getContext("2d");
var canvasSize = 400;

canvas.width = canvasSize;
canvas.height = canvasSize;

ctx.fillStyle = "#ff6100";

//Drawing the rectangle
ctx.fillRect(canvasSize*0.5,canvasSize*0.5,canvasSize*0.4,canvasSize*0.2);

//Drawing the quarter of a circle
ctx.beginPath();
ctx.arc(canvasSize*0.5,canvasSize*0.5,canvasSize*0.4,Math.PI,1.5*Math.PI);
ctx.lineTo(canvasSize*0.5,canvasSize*0.5);
ctx.lineTo(canvasSize*0.1,canvasSize*0.5);
ctx.fill();

//Drawing the triangle
ctx.beginPath();
ctx.moveTo(canvasSize*0.5,canvasSize*0.5);
ctx.lineTo(canvasSize*0.1,canvasSize*0.5);
ctx.lineTo(canvasSize*0.5,canvasSize*0.7);
ctx.fill();

//Drawing the coordinates
ctx.beginPath();
ctx.fillStyle = "#000000";

ctx.moveTo(canvasSize*0.5,canvasSize*0.05);
ctx.lineTo(canvasSize*0.5,canvasSize*0.95);
ctx.moveTo(canvasSize*0.05,canvasSize*0.5);
ctx.lineTo(canvasSize*0.95,canvasSize*0.5);

ctx.moveTo(canvasSize*0.5,canvasSize*0.05);
ctx.lineTo(canvasSize*0.5125,canvasSize*0.075);
ctx.moveTo(canvasSize*0.5,canvasSize*0.05);
ctx.lineTo(canvasSize*0.4875,canvasSize*0.075);

ctx.moveTo(canvasSize*0.95,canvasSize*0.5);
ctx.lineTo(canvasSize*0.925,canvasSize*0.4875);
ctx.moveTo(canvasSize*0.95,canvasSize*0.5);
ctx.lineTo(canvasSize*0.925,canvasSize*0.5125);

ctx.moveTo(canvasSize*0.495,canvasSize*0.1);
ctx.lineTo(canvasSize*0.505,canvasSize*0.1);
ctx.moveTo(canvasSize*0.495,canvasSize*0.3);
ctx.lineTo(canvasSize*0.505,canvasSize*0.3);
ctx.moveTo(canvasSize*0.495,canvasSize*0.7);
ctx.lineTo(canvasSize*0.505,canvasSize*0.7);
ctx.moveTo(canvasSize*0.495,canvasSize*0.9);
ctx.lineTo(canvasSize*0.505,canvasSize*0.9);

ctx.moveTo(canvasSize*0.1,canvasSize*0.495);
ctx.lineTo(canvasSize*0.1,canvasSize*0.505);
ctx.moveTo(canvasSize*0.3,canvasSize*0.495);
ctx.lineTo(canvasSize*0.3,canvasSize*0.505);
ctx.moveTo(canvasSize*0.7,canvasSize*0.495);
ctx.lineTo(canvasSize*0.7,canvasSize*0.505);
ctx.moveTo(canvasSize*0.9,canvasSize*0.495);
ctx.lineTo(canvasSize*0.9,canvasSize*0.505);


//Drawing necessary text data
ctx.font = "15px Arial";
ctx.fillText("Y", canvasSize*0.5125,canvasSize*0.05);
ctx.fillText("X",canvasSize*0.95,canvasSize*0.4875);

ctx.fillText("R", canvasSize*0.5125,canvasSize*0.1125);
ctx.fillText("R/2",canvasSize*0.5125,canvasSize*0.3125);
ctx.fillText("R", canvasSize*0.8875,canvasSize*0.4875);
ctx.fillText("R/2",canvasSize*0.6875,canvasSize*0.4875);
ctx.fillText("-R", canvasSize*0.5125,canvasSize*0.9125);
ctx.fillText("-R/2",canvasSize*0.5125,canvasSize*0.7125);
ctx.fillText("-R", canvasSize*0.0875,canvasSize*0.4875);
ctx.fillText("-R/2",canvasSize*0.2875,canvasSize*0.4875);

ctx.stroke();