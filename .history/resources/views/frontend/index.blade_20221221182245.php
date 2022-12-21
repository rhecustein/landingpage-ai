@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="bg-stone-900 mb-20">
    <div class="container mx-auto flex px-1 sm:px-20 py-20 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <style>
                .overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    z-index: 100;
                }
            </style>
        <script>
            window.canvasOptions = {
                autoClear: true,
                autoCompensate: false,
                autoPushPop: true,
                canvas: true,
                //- centered: true,
                width: null,
                height: null
            };


        </script>
        <!-- partial -->
        <script src='https://codepen.io/Alca/pen/XeZBab.js'></script>
        <script src="./script.js"></script>
        </div>
        <div class="lg:flex-grow md:w-1/2 px-4 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-8xl text-5xl mb-4 font-medium text-neutral-50">
               ChatBot AI
            </h1>
            <p class="mb-8 sm:text-4xl text-3xl text-neutral-50">
                papa
            </p>
            <div class="flex justify-center">
                <a href="https://github.com/nasirkhan" class="inline-flex text-white bg-gray-700 border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 18 18">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    Github
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Recreating "Mock Chat Animation" by Jacob "Alca" Foster (Me) https://codepen.io/Alca/pen/bWGMoz

let amountOfColors = 18;
let hueRot = 360 / amountOfColors;
let messages = [];
let nextAt = 0;

let chatLineWidth = 500;
let chatLineWidth40 = chatLineWidth * 0.4;
let chatLineWidth60 = chatLineWidth * 0.6;
let chatLineMaxHeight = chatLineWidth40;
let chatLinePadding = 10;
let chatLineRadius = chatLinePadding * 0.5;
let chatLineColor = hsl(0, 0, 14);
let chatProfileImgSize = 60;
let chatProfileImgRadius = chatLinePadding * 0.4;
let chatTextTiming = Array(10).fill(null).map((n, i) => i * 50 + 100);
let chatTextRadius = chatLinePadding * 0.2;
let chatTextWidth = chatLineWidth - chatLinePadding * 3 - chatProfileImgSize;
let chatTextHeight = 16;
let chatNameTimeWidth = chatTextWidth * 0.122;
let chatNameTimeColor = hsl(0, 0, 22);
let chatLineTextLightness = 28;
let richBodyAndImgLightness = 20;
let chatInputHeight = 40;
let chatInputHeight30 = chatInputHeight * 0.3;
let chatInputHeight40 = chatInputHeight * 0.4;
let chatInputHeight50 = chatInputHeight * 0.5;


function draw(e) {
  translate(-chatLineWidth * 0.5 + width_half, height - chatLinePadding - chatInputHeight);
  messages = messages.filter(m => 'kill' in m === false);
  let yOff = -chatLinePadding - chatInputHeight;

  beginPath();
  rect(0, 0, chatLineWidth, chatInputHeight, chatLineRadius);
  fill(hsl(0, 0, 14));

  beginPath();
  let r = chatTextHeight * 0.5;
  circle(chatLineWidth - chatLinePadding - r, chatInputHeight50, r);
  rect(chatInputHeight + 2 + chatLinePadding, (chatInputHeight - chatTextHeight) * 0.5, chatLineWidth40, chatTextHeight, chatTextRadius);
  rect(chatInputHeight, 0, 2, chatInputHeight);
  rect(chatInputHeight50 - 1, chatInputHeight30, 2, chatInputHeight40);
  rect(chatInputHeight30, chatInputHeight50 - 1, chatInputHeight40, 2);
  fill(hsl(0, 0, 18));

  let mouseBelowChatInput = mouseIn && height - mousePos.y < chatInputHeight;

  messages.slice().reverse().forEach(m => {
    let anim = m.draw(e);
    if (yOff < -height) {
      m.kill = true;
    }
    yOff += anim.y;
    translate(0, anim.y);
    // Fun things
    if (mouseBelowChatInput) {
      // translate(0, anim.y + sin(anim.cT * PI) * -30);
      // rotate(-0.1 * sin(anim.cT * PI));
      rotate(-0.1 * anim.cT);
    }
  });
  if (!messages.length || e - messages[messages.length - 1].created > nextAt) {
    messages.push(new Message(e));
    nextAt = random(1300) + 180;
  }
}

class Message {
  constructor(e = performance.now()) {
    this.name = max(0.3, random()) * 0.5 * chatTextWidth;
    this.text = round(random(4)) + random(0.2, 0.85);
    this.hue = Math.floor(random(amountOfColors)) * hueRot;
    this.color = hsl(this.hue, 90, 50);
    this.profileImgColor = hsl(this.hue, 40, 55);
    this.img = random() > 0.9;
    this.richBody = !this.img && random() > 0.85;
    let bodyHeight = Math.max(chatProfileImgSize, (chatLinePadding + chatTextHeight) * ceil(this.text + 1) - chatLinePadding);
    this.totalHeight = chatLinePadding * 2 + (this.img || this.richBody ? chatLineMaxHeight : Math.min(chatLineMaxHeight, bodyHeight));
    this.easeHeightTime = ease.expo.out(this.totalHeight, 0, 500, chatLineMaxHeight);
    this.easeHeightTimeI = 1 / this.easeHeightTime;
    this.created = e;
  }
  anim(e = performance.now()) {
    let elapsed = e - this.created;
    let cT = ease.quart.inOut(constrain(elapsed * this.easeHeightTimeI, 0, 1), 0, 1, 1);
    let h = cT * this.totalHeight;
    let mB = cT * chatLinePadding;
    let y = -h - mB;
    let text = chatTextTiming.map(n => {
      let t = ease.quart.inOut(constrain((elapsed - n) / 500, 0, 1), 1, -1, 1);
      return { t, y: t * chatTextHeight * 2 };
    });
    return { elapsed, cT, h, mB, y, text };
  }
  draw(e = performance.now()) {
    push();

    let anim = this.anim(e);
    let { h, text, cT } = anim;

    translate(-100, 0);
    scale(cT);
    translate(100, 0);

    translate(0, anim.y);

    let containerRadius = h < chatLineRadius * 2 ? h * 0.5 : chatLineRadius;

    beginPath();
    rect(0, 0, chatLineWidth, h, containerRadius);
    fill(chatLineColor);
    clip();

    translate(chatLinePadding, chatLinePadding + text[0].y);

    beginPath();
    rect(0, 0, chatProfileImgSize, chatProfileImgSize, chatProfileImgRadius);
    fill(this.profileImgColor);

    translate(chatProfileImgSize + chatLinePadding, 0);

    beginPath();
    rect(0, 0, this.name, chatTextHeight, chatTextRadius);
    fill(this.color);

    beginPath();
    rect(this.name + chatLinePadding, 0, chatNameTimeWidth, chatTextHeight, chatTextRadius);
    fill(chatNameTimeColor);

    translate(0, chatTextHeight + chatLinePadding);

    let ind = 0;
    for (let i = this.text; i > 0; i--, ind++) {
      let w = i > 1 ? chatTextWidth : i * chatTextWidth;
      let { y, t } = text[ind + 1];
      beginPath();
      rect(0, y, w, chatTextHeight, chatTextRadius);
      fill(hsl(0, 0, chatLineTextLightness, 1 - t));
      translate(0, chatTextHeight + chatLinePadding);
    }

    if (this.img || this.richBody) {
      let { y, t } = text[ind + 1];
      beginPath();
      if (this.richBody) {
        rect(0, y, 4, chatLineWidth60, 1);
        translate(chatLinePadding + 4, 0);
        rect(0, y, chatLineWidth40, chatTextHeight, chatTextRadius);
        translate(0, chatLinePadding + chatTextHeight);
      }
      rect(0, y, chatLineWidth60, chatLineWidth60, chatLineRadius);
      fill(hsl(0, 0, richBodyAndImgLightness, 1 - t));
    }

    pop();

    return anim;
  }}


/* requestAnimationFrame */
</script>


@endsection