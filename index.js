// Inspired by: https://codepen.io/jedtrow/pen/azWywW?editors=0010

const circles = [];
let canvas = document.getElementById('canvas-background');
let context = canvas.getContext('2d');
// Settings
const opacity = 0.3;
const colors = [
  `rgba(168, 230, 207, ${opacity})`, // an array of rgb colors for the circles
  `rgba(220, 237, 193, ${opacity})`,
  `rgba(255, 211, 182), ${opacity})`,
  `rgba(255, 170, 165, ${opacity})`,
  `rgba(255, 139, 148, ${opacity})`,
];
const minSize = 1;
const maxSize = 10;
const numCircles = 400;
const minSpeed = -2;
const maxSpeed = 2.5;
const expandState = true;

function buildArray() {
  for (let i = 0; i < numCircles; i += 1) {
    const color = Math.floor(Math.random() * (colors.length - 1)) + 1;
    const left = Math.floor(Math.random() * (canvas.width - 0 + 1)) + 0;
    const top = Math.floor(Math.random() * (canvas.height - 0 + 1)) + 0;
    const size = Math.floor(Math.random() * (maxSize - minSize + 1)) + 0;
    let leftSpeed =
      (Math.floor(Math.random() * (maxSpeed - minSpeed + 1)) + minSpeed) / 10;
    let topSpeed =
      (Math.floor(Math.random() * (maxSpeed - minSpeed + 1)) + minSpeed) / 10;
    const expandState1 = expandState;

    while (leftSpeed === 0 || topSpeed === 0) {
      leftSpeed =
        (Math.floor(Math.random() * (maxSpeed - minSpeed + 1)) + minSpeed) / 10;
      topSpeed =
        (Math.floor(Math.random() * (maxSpeed - minSpeed + 1)) + minSpeed) / 10;
    }

    const circle = {
      color,
      left,
      top,
      size,
      leftSpeed,
      topSpeed,
      expandState: expandState1,
    };
    circles.push(circle);
  }
}

function build() {
  for (let h = 0; h < circles.length; h += 1) {
    const curCircle = circles[h];

    context.fillStyle = colors[curCircle.color - 1];
    context.beginPath();

    if (curCircle.left > canvas.width + curCircle.size) {
      curCircle.left = 0 - curCircle.size;
      context.arc(
        curCircle.left,
        curCircle.top,
        curCircle.size,
        0,
        2 * Math.PI,
        false
      );
    } else if (curCircle.left < 0 - curCircle.size) {
      curCircle.left = canvas.width + curCircle.size;
      context.arc(
        curCircle.left,
        curCircle.top,
        curCircle.size,
        0,
        2 * Math.PI,
        false
      );
    } else {
      curCircle.left += curCircle.leftSpeed;
      context.arc(
        curCircle.left,
        curCircle.top,
        curCircle.size,
        0,
        2 * Math.PI,
        false
      );
    }

    if (curCircle.top > canvas.height + curCircle.size) {
      curCircle.top = 0 - curCircle.size;
      context.arc(
        curCircle.left,
        curCircle.top,
        curCircle.size,
        0,
        2 * Math.PI,
        false
      );
    } else if (curCircle.top < 0 - curCircle.size) {
      curCircle.top = canvas.height + curCircle.size;
      context.arc(
        curCircle.left,
        curCircle.top,
        curCircle.size,
        0,
        2 * Math.PI,
        false
      );
    } else {
      curCircle.top += curCircle.topSpeed;
      if (
        curCircle.size !== maxSize &&
        curCircle.size !== minSize &&
        curCircle.expandState1 === false
      ) {
        curCircle.size -= 0.1;
      } else if (
        curCircle.size !== maxSize &&
        curCircle.size !== minSize &&
        curCircle.expandState1 === true
      ) {
        curCircle.size += 0.1;
      } else if (
        curCircle.size === maxSize &&
        curCircle.expandState1 === true
      ) {
        curCircle.expandState1 = false;
        curCircle.size -= 0.1;
      } else if (
        curCircle.size === minSize &&
        curCircle.expandState1 === false
      ) {
        curCircle.expandState1 = true;
        curCircle.size += 0.1;
      }
      context.arc(
        curCircle.left,
        curCircle.top,
        curCircle.size,
        0,
        2 * Math.PI,
        false
      );
    }

    context.closePath();
    context.fill();
    // context.ellipse;
  }
}

let xVal = 0;

window.requestAnimFrame = (function(callback) {
  return (
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback) {
      window.setTimeout(callback, 1000 / 60);
    }
  );
})();

function animate() {
  canvas = document.getElementById('canvas-background');
  context = canvas.getContext('2d');

  context.clearRect(0, 0, canvas.width, canvas.height);

  xVal += 1;
  build();

  requestAnimFrame(function() {
    animate();
  });
}
window.onload = function() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  buildArray();
  animate();
};

window.onresize = function() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  // buildArray();
  animate();
};
