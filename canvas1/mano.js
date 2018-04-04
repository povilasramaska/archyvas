console.log("labas");

      window.requestAnimFrame = (function(callback) {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
        function(callback) {
          window.setTimeout(callback, 1000 / 60);
        };
      })();

      function initBalls() {
        balls = [];

        var red = '#EF2B36';
        var yellow = '#FFC636';
        var green = '#02A817';

        // L
        balls.push(new Ball(102, 50, 0, 0, yellow));
        balls.push(new Ball(102, 59, 0, 0, yellow));
        balls.push(new Ball(104, 69, 0, 0, yellow));
        balls.push(new Ball(102, 78, 0, 0, green));
        balls.push(new Ball(103, 90, 0, 0, green));
        balls.push(new Ball(102, 107, 0, 0, green));
        balls.push(new Ball(104, 118, 0, 0, red));
        balls.push(new Ball(102, 125, 0, 0, red));
        balls.push(new Ball(103, 137, 0, 0, red));

        balls.push(new Ball(113, 137, 0, 0, red));
        balls.push(new Ball(123, 135, 0, 0, red));
        balls.push(new Ball(133, 137, 0, 0, red));
        balls.push(new Ball(143, 136, 0, 0, red));

        // I
        balls.push(new Ball(187, 50, 0, 0, yellow));
        balls.push(new Ball(185, 59, 0, 0, yellow));
        balls.push(new Ball(187, 69, 0, 0, yellow));
        balls.push(new Ball(185, 78, 0, 0, green));
        balls.push(new Ball(187, 90, 0, 0, green));
        balls.push(new Ball(185, 107, 0, 0, green));
        balls.push(new Ball(187, 118, 0, 0, red));
        balls.push(new Ball(185, 125, 0, 0, red));
        balls.push(new Ball(187, 137, 0, 0, red));



        // E

        balls.push(new Ball(227, 50, 0, 0, yellow));

        balls.push(new Ball(237, 52, 0, 0, yellow));
        balls.push(new Ball(247, 50, 0, 0, yellow));
        balls.push(new Ball(257, 52, 0, 0, yellow));
        balls.push(new Ball(267, 50, 0, 0, yellow));

        balls.push(new Ball(225, 59, 0, 0, yellow));
        balls.push(new Ball(227, 69, 0, 0, yellow));
        balls.push(new Ball(225, 78, 0, 0, green));
        balls.push(new Ball(227, 90, 0, 0, green));

        balls.push(new Ball(237, 90, 0, 0, green));
        balls.push(new Ball(247, 92, 0, 0, green));
        balls.push(new Ball(257, 90, 0, 0, green));
        balls.push(new Ball(267, 92, 0, 0, green));

        balls.push(new Ball(225, 107, 0, 0, green));
        balls.push(new Ball(227, 118, 0, 0, red));
        balls.push(new Ball(225, 125, 0, 0, red));
        balls.push(new Ball(227, 137, 0, 0, red));

        balls.push(new Ball(237, 137, 0, 0, red));
        balls.push(new Ball(247, 135, 0, 0, red));
        balls.push(new Ball(257, 137, 0, 0, red));
        balls.push(new Ball(267, 136, 0, 0, red));

        // T

        balls.push(new Ball(307, 50, 0, 0, yellow));
        balls.push(new Ball(317, 52, 0, 0, yellow));
        balls.push(new Ball(327, 50, 0, 0, yellow));
        balls.push(new Ball(347, 52, 0, 0, yellow));
        balls.push(new Ball(357, 50, 0, 0, yellow));
        balls.push(new Ball(367, 50, 0, 0, yellow));

        balls.push(new Ball(337, 50, 0, 0, yellow));
        balls.push(new Ball(337, 59, 0, 0, yellow));
        balls.push(new Ball(337, 69, 0, 0, yellow));
        balls.push(new Ball(337, 78, 0, 0, green));
        balls.push(new Ball(337, 90, 0, 0, green));
        balls.push(new Ball(337, 107, 0, 0, green));
        balls.push(new Ball(337, 118, 0, 0, red));
        balls.push(new Ball(337, 125, 0, 0, red));
        balls.push(new Ball(337, 137, 0, 0, red));

        // U

        balls.push(new Ball(407, 50, 0, 0, yellow));
        balls.push(new Ball(407, 59, 0, 0, yellow));
        balls.push(new Ball(407, 69, 0, 0, yellow));
        balls.push(new Ball(407, 78, 0, 0, green));
        balls.push(new Ball(407, 90, 0, 0, green));
        balls.push(new Ball(407, 107, 0, 0, green));
        balls.push(new Ball(410, 118, 0, 0, red));
        balls.push(new Ball(415, 125, 0, 0, red));
        balls.push(new Ball(420, 137, 0, 0, red));


        balls.push(new Ball(427, 135, 0, 0, red));
        balls.push(new Ball(437, 137, 0, 0, red));
        balls.push(new Ball(447, 136, 0, 0, red));

        balls.push(new Ball(467, 50, 0, 0, yellow));
        balls.push(new Ball(467, 59, 0, 0, yellow));
        balls.push(new Ball(467, 69, 0, 0, yellow));
        balls.push(new Ball(467, 78, 0, 0, green));
        balls.push(new Ball(467, 90, 0, 0, green));
        balls.push(new Ball(467, 107, 0, 0, green));
        balls.push(new Ball(464, 118, 0, 0, red));
        balls.push(new Ball(459, 125, 0, 0, red));
        balls.push(new Ball(454, 137, 0, 0, red));



        // V

        balls.push(new Ball(505, 50, 0, 0, yellow));
        balls.push(new Ball(509, 59, 0, 0, yellow));
        balls.push(new Ball(513, 69, 0, 0, yellow));
        balls.push(new Ball(517, 78, 0, 0, green));
        balls.push(new Ball(521, 90, 0, 0, green));
        balls.push(new Ball(525, 107, 0, 0, green));
        balls.push(new Ball(529, 118, 0, 0, red));
        balls.push(new Ball(534, 125, 0, 0, red));

        balls.push(new Ball(537, 137, 0, 0, red));

        balls.push(new Ball(569, 50, 0, 0, yellow));
        balls.push(new Ball(565, 59, 0, 0, yellow));
        balls.push(new Ball(561, 69, 0, 0, yellow));
        balls.push(new Ball(557, 78, 0, 0, green));
        balls.push(new Ball(553, 90, 0, 0, green));
        balls.push(new Ball(549, 107, 0, 0, green));
        balls.push(new Ball(545, 118, 0, 0, red));
        balls.push(new Ball(541, 125, 0, 0, red));

      // A

        balls.push(new Ball(641, 50, 0, 0, yellow));
        balls.push(new Ball(633, 59, 0, 0, yellow));
        balls.push(new Ball(629, 69, 0, 0, yellow));
        balls.push(new Ball(625, 78, 0, 0, green));
        balls.push(new Ball(621, 90, 0, 0, green));

        balls.push(new Ball(631, 105, 0, 0, green));
        balls.push(new Ball(641, 105, 0, 0, green));
        balls.push(new Ball(651, 105, 0, 0, green));

        balls.push(new Ball(617, 107, 0, 0, green));
        balls.push(new Ball(613, 118, 0, 0, red));
        balls.push(new Ball(609, 125, 0, 0, red));
        balls.push(new Ball(605, 137, 0, 0, red));



        balls.push(new Ball(649, 59, 0, 0, yellow));
        balls.push(new Ball(653, 69, 0, 0, yellow));
        balls.push(new Ball(657, 78, 0, 0, green));
        balls.push(new Ball(661, 90, 0, 0, green));
        balls.push(new Ball(665, 107, 0, 0, green));
        balls.push(new Ball(669, 118, 0, 0, red));
        balls.push(new Ball(673, 125, 0, 0, red));
        balls.push(new Ball(677, 137, 0, 0, red));

        return balls;
      }
      function getMousePos(canvas, evt) {
        // get canvas position
        var obj = canvas;
        var top = 0;
        var left = 0;
        while(obj.tagName != 'BODY') {
          top += obj.offsetTop;
          left += obj.offsetLeft;
        
          obj = obj.offsetParent;

        }

        // return relative mouse position
        var mouseX = evt.clientX - left + window.pageXOffset;
        var mouseY = evt.clientY - top + window.pageYOffset;
        return {
          x: mouseX,
          y: mouseY
        };
      }
      function updateBalls(canvas, balls, timeDiff, mousePos) {
        var context = canvas.getContext('2d');
        var collisionDamper = 0.3;
        var floorFriction = 0.0005 * timeDiff;
        var mouseForceMultiplier = 1 * timeDiff;
        var restoreForce = 0.002 * timeDiff;

        for(var n = 0; n < balls.length; n++) {
          var ball = balls[n];
          // set ball position based on velocity
          ball.y += ball.vy;
          ball.x += ball.vx;

          // restore forces
          if(ball.x > ball.origX) {
            ball.vx -= restoreForce;
          }
          else {
            ball.vx += restoreForce;
          }
          if(ball.y > ball.origY) {
            ball.vy -= restoreForce;
          }
          else {
            ball.vy += restoreForce;
          }

          // mouse forces
          var mouseX = mousePos.x;
          var mouseY = mousePos.y;

          var distX = ball.x - mouseX;
          var distY = ball.y - mouseY;

          var radius = Math.sqrt(Math.pow(distX, 2) + Math.pow(distY, 2));


          var totalDist = Math.abs(distX) + Math.abs(distY);


          var forceX = (Math.abs(distX) / totalDist) * (1 / radius) * mouseForceMultiplier;
          var forceY = (Math.abs(distY) / totalDist) * (1 / radius) * mouseForceMultiplier;

          if(distX > 0) {// mouse is left of ball
            ball.vx += forceX;
          }
          else {
            ball.vx -= forceX;
          }
          if(distY > 0) {// mouse is on top of ball
            ball.vy += forceY;
          }
          else {
            ball.vy -= forceY;
          }

          // floor friction
          if(ball.vx > 0) {
            ball.vx -= floorFriction;
          }
          else if(ball.vx < 0) {
            ball.vx += floorFriction;
          }
          if(ball.vy > 0) {
            ball.vy -= floorFriction;
          }
          else if(ball.vy < 0) {
            ball.vy += floorFriction;
          }

          // floor condition
          if(ball.y > (canvas.height - ball.radius)) {
            ball.y = canvas.height - ball.radius - 2;
            ball.vy *= -1;
            ball.vy *= (1 - collisionDamper);
          }

          // ceiling condition
          if(ball.y < (ball.radius)) {
            ball.y = ball.radius + 2;
            ball.vy *= -1;
            ball.vy *= (1 - collisionDamper);
          }

          // right wall condition
          if(ball.x > (canvas.width - ball.radius)) {
            ball.x = canvas.width - ball.radius - 2;
            ball.vx *= -1;
            ball.vx *= (1 - collisionDamper);
          }

          // left wall condition
          if(ball.x < (ball.radius)) {
            ball.x = ball.radius + 2;
            ball.vx *= -1;
            ball.vx *= (1 - collisionDamper);
          }
        }
      }
      function Ball(x, y, vx, vy, color) {
        this.x = x;
        this.y = y;
        this.vx = vx;
        this.vy = vy;
        this.color = color;
        this.origX = x;
        this.origY = y;
        this.radius = 10;
      }
      function animate(canvas, balls, lastTime, mousePos) {
        var context = canvas.getContext('2d');
	

        // update
        var date = new Date();
        var time = date.getTime();
        var timeDiff = time - lastTime;
        updateBalls(canvas, balls, timeDiff, mousePos);
        lastTime = time;

        // clear
        context.clearRect(0, 0, canvas.width, canvas.height);

        // render
        for(var n = 0; n < balls.length; n++) {
          var ball = balls[n];
          context.beginPath();
          context.arc(ball.x, ball.y, ball.radius, 0, 2 * Math.PI, true);
          context.fillStyle = ball.color;
          context.fill();
	  context.stroke();
        }

        // request new frame
        requestAnimFrame(function() {
          animate(canvas, balls, lastTime, mousePos);
        });
      }
      var canvas = document.getElementById('myCanvas');
      var balls = initBalls();
      var date = new Date();
      var time = date.getTime();
      /*
       * set mouse position really far away
       * so the mouse forces are nearly obsolete
       */
      var mousePos = {
        x: 9999,
        y: 9999
      };

      canvas.addEventListener('mousemove', function(evt) {
        var pos = getMousePos(canvas, evt);
        mousePos.x = pos.x;
        mousePos.y = pos.y;
      });

      canvas.addEventListener('mouseout', function(evt) {
        mousePos.x = 9999;
        mousePos.y = 9999;
      });
      animate(canvas, balls, time, mousePos);
