<template>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hello from Vue on Laravel
                </div>
                <div class="links">
                    <a href="https://amitzaman.com/">Amit's Website</a>
                    <a href="https://github.com/amitzed/laravel-vue-sample">Amit's Github</a>
                </div>
            </div>
            <div class="parent">
              <div class="div1">
                <img class="car" src="https://assets.bugatti.com/fileadmin/_processed_/sei/p2/se-image-2aa68763cc88b824242186ef758abcdc.jpg" alt=""></div>
              <div class="div2">
                <img class="mw-banner" src="" alt="">
              </div>
              <div class="div3">
                <img class="logo" src="" alt="">
              </div>
              <div class="div4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
              <div class="div5">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <div class="div6">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>

            <div class="media-queries">
              <h1>Title<span>Secondary Title</span></h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </template>
    <script>
        export default {}
    </script>
    <style scoped>
        .content {
            text-align: center;
        }
        .title {
            font-size: 44px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .parent {
          background-color: #DE4D3A;
          margin: 10px;
          padding: 30px;
          height: auto;
          display: flex;
          flex-flow: row wrap;
          align-items: center;
          justify-content: center;
          align-content: center;
        }
        @media (max-width: 600px) {
          .parent {
            background-color: steelblue;
            margin: 10px;
            padding: 10px;
            display: flex;
            flex-flow: row wrap;
            align-items: center;
            justify-content: center;
            transition: ease all .5s;
          }
        }
        .div1 .car {
          margin: 1px;
          height: 150px;
          width: 150px;
        }
        @media (max-width: 600px) {
          .div1 .car  {
            margin: 1px;
            height: 65px;
            width: 65px;
            transition: ease all .5s;
          }
        }
        .div2 .mw-banner {
          margin: 5px;
          width: 150px;
          font-size: 30px;
          text-align: center;
        }
        .div2 {

        }
        @media (max-width: 600px) {
          .div2 .mw-banner  {
            margin: 1px;
            width: 65px;
            transition: ease all .5s;
          }
        }
        .div3 .logo {
          margin: 5px;
          height: 150px;
        }
        @media (max-width: 600px) {
          .div3 .logo   {
            margin: 1px;
            height: 65px;
            width: 65px;
            transition: ease all .5s;
          }
        }
        .div4 {
          background-color: #E3DB96;
          margin: 5px;
          width: 150px;
          height: auto;
        }
        @media (max-width: 600px) {
          .div4  {
            margin: 1px;
            height: auto;
            width: 140px;
            font-size: .25rem;
            flex: 1 1 auto;
            transition: ease all .5s;
          }
        }
        .div5 {
          font-family: 'Arvo', serif;
          background-color: #E3DB96;
          margin: 5px;
          width: 200px;
          flex: 1 1 auto;
        }
        @media (max-width: 600px) {
          .div5   {
            margin: 1px;
            height: auto;
            width: 140px;
            font-size: .25rem;
            flex: 1 1 auto;
            transition: ease all .5s;
          }
        }
        .div6 {
          font-family: 'Arvo', serif;
          background-color: #E3DB96;
          margin: 5px;
          width: 200px;
          flex: 2 1 auto;
        }
        @media (max-width: 600px) {
          .div6 {
            margin: 1px;
            height: auto;
            width: 140px;
            font-size: .25rem;
            flex: 2 1 auto;
            transition: ease all .5s;
          }
        }
        .media-queries {
          margin: 0 auto;
          max-width: 850px;
        }
        h1 {
          font-family: 'Arvo', serif;
          color: #3E4147;
          font-size: 3rem;
          line-height: 1.15;
          font-weight: 700;
          margin-top: 0;
          margin-bottom: .5em;
          text-transform: uppercase;
        }
        h1 span {
          color: #636b6f;
          font-size: .5em;
          display: block;
        }

        p {
          font-family: 'Arvo', serif;
          color: #3E4147;
          font-size: 1rem;
          font-weight: 400;
          line-height: 1.75;
          margin-bottom: 2em;
        }
        @media (min-width: 1500px) {
          p {
            color: blue;
            font-size: 2.50rem;
            transition: ease all .5s;
           }
        }
        @media (min-width: 800px) {
          p {
            font-size: 1.5rem;
            line-height: 1.5;
            transition: ease all .5s;
          }
        }
        @media (max-width: 800px) {
          p {
            font-size: .25em;
            transition: ease all .5s;
          }
        }
    </style>
    <script type="text/javascript">
      // Interactivity
      let candy;
      let money;

      const start = ()=>{
      candy = 0;
      money = 25;
      showStatus();
      };
      const showStatus = () => {
      alert('You have ' + candy + ' pieces of candy & $' + money);
      askForAction();
      };
      const askForAction = () => {
      const choice = prompt('What do you want to do?', 'buy candy / eat candy / restart');
      if(choice === 'buy candy') {
        buyCandy();
      } else if(choice === 'eat candy') {
        eatCandy();
      } else if(choice === 'restart') {
        start();
      }
      };
      const buyCandy = () => {
      candy++;
      money -= .75;
      showStatus();
      };
      const eatCandy = () => {
      candy--;
      showStatus();
      };
      start();
    </script>
