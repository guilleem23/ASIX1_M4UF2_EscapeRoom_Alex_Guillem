<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>The Great Escape</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link
      rel="stylesheet"

      
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="dist/css/main.css" />
  </head>
  <body>
      
  
  <audio autoplay loop>
  <source src="img/miedo.mp3" type="audio/mp3">
</audio>


    <div class="container">

      <input type="radio" name="scene" class="scene-radio" id="intro" checked />
      <label class="scene intro" for="prolog-1">
        <span class="intro-label">
          Escape Roo<span class="last">m</span>
        </span>

        <span class="intro-label">
          Clica para empezar<span class="last">.</span>
        </span>
      </label>


      <input type="radio" name="scene" class="scene-radio" id="prolog-1" />
      <label class="scene prolog" for="prolog-2">
        <span class="prolog-label">
          EH? DONDE ESTOY<span class="last">?</span>
        </span>

        <span class="prolog-label">
          QUE ES ESTE SITIO<span class="last">?</span>
        </span>

        <span class="prolog-label">
          Esto parece ser muy raro. Sera que me han secuestrado?<span
            class="last"
            >.</span
          >
        </span>
      </label>

      <input type="radio" name="scene" class="scene-radio" id="prolog-2" />
      <label class="scene prolog" for="instruction">
        <span class="prolog-label">
         NECESITO SALIR DE AQUI!<span class="last">!</span>
        </span>

        <span class="prolog-label"> AHORA MISMO!!<span class="last">!</span> </span>
      </label>

      <!-- instruction -->
      <input type="radio" name="scene" class="scene-radio" id="instruction" />
      <label class="scene instruction" for="scene-1">
        <span class="instruction-label">
          Tienes que completar el puzzle para salir de la casa<span
            class="last"
            >.</span
          >
        </span>

        <span class="instruction-label">
          Haz click donde quieras cuando estes preparado<span class="last">.</span>
        </span>
      </label>

      <!-- scene 1 -->
      <input type="radio" name="scene" class="scene-radio" id="scene-1" />
      <form class="scene scene-1">
        <!-- bedroom interaction checkbox -->
        <input
          type="checkbox"
          class="interaction-checkbox bedroom-switch-checkbox"
          name="bedroom-lamp"
          id="bedroom-lamp"
        />
        <input
          type="checkbox"
          class="interaction-checkbox bedroom-cupboard-1-checkbox"
          name="bedroom-cupboard-1"
          id="bedroom-cupboard-1"
        />
        <input
          type="checkbox"
          class="interaction-checkbox bedroom-vase-1-switch-checkbox"
          name="bedroom-vase-1-switch"
          id="bedroom-vase-1-switch"
        />
        <input
          type="checkbox"
          class="interaction-checkbox bedroom-vase-2-switch-checkbox"
          name="bedroom-vase-2-switch"
          id="bedroom-vase-2-switch"
        />

        <!-- bedroom interaction radio  -->
        <input
          type="radio"
          class="trigger-radio bedroom-door-locked-radio"
          name="door-locked-event"
          id="door-locked-event"
        />
        <input
          type="radio"
          class="trigger-radio open-door-event-radio"
          name="open-door-event"
          id="open-door-event"
        />
        <input
          type="radio"
          class="trigger-radio bedroom-place-hat-radio"
          name="bedroom-place-hat-event"
          id="bedroom-place-hat-event"
        />

        <!-- bedroom events to take items radio  -->
        <input
          type="radio"
          class="trigger-radio bedroom-paper-item-radio"
          name="bedroom-item-paperball-1"
          id="bedroom-item-paperball-1"
        />
        <input
          type="radio"
          class="trigger-radio bedroom-paper-2-item-radio"
          name="bedroom-item-paperball-2"
          id="bedroom-item-paperball-2"
        />
        <input
          type="radio"
          class="trigger-radio bedroom-mouse-spray-item-radio"
          name="bedroom-item-mouse-spray"
          id="bedroom-item-mouse-spray"
        />
        <input
          type="radio"
          class="trigger-radio bedroom-item-key-radio"
          name="bedroom-item-key"
          id="bedroom-item-key"
        />

        <!-- kitchen interaction checkbox -->
        <input
          type="checkbox"
          class="interaction-checkbox kitchen-switch-checkbox"
          name="kitchen-lamp"
          id="kitchen-lamp"
        />
        <input
          type="checkbox"
          class="interaction-checkbox kitchen-stove-switch-checkbox"
          name="kitchen-stove-switch"
          id="kitchen-stove-switch"
        />

        <!-- kitchen interaction radio -->
        <input
          type="radio"
          class="trigger-radio kitchen-put-paper-ball-1-trash-radio"
          name="kitchen-put-paper-ball-1-trash-event"
          id="kitchen-put-paper-ball-1-trash-event"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-put-paper-ball-2-trash-radio"
          name="kitchen-put-paper-ball-2-trash-event"
          id="kitchen-put-paper-ball-2-trash-event"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-put-can-trash-radio"
          name="kitchen-put-can-trash-event"
          id="kitchen-put-can-trash-event"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-put-fish-bone-trash-radio"
          name="kitchen-put-fish-bone-trash-event"
          id="kitchen-put-fish-bone-trash-event"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-kill-mouse-radio"
          name="kitchen-kill-mouse-event"
          id="kitchen-kill-mouse-event"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-open-cabinet-1-radio"
          name="kitchen-open-cabinet-1-event"
          id="kitchen-open-cabinet-1-event"
        />

        <!-- kitchen events to take items radio  -->
        <input
          type="radio"
          class="trigger-radio kitchen-item-paper-ball-1-trash-radio"
          name="kitchen-item-paper-ball-1-trash"
          id="kitchen-item-paper-ball-1-trash"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-item-paper-ball-2-trash-radio"
          name="kitchen-item-paper-ball-2-trash"
          id="kitchen-item-paper-ball-2-trash"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-item-can-trash-radio"
          name="kitchen-item-can-trash"
          id="kitchen-item-can-trash"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-item-fish-bone-trash-radio"
          name="kitchen-item-fish-bone-trash"
          id="kitchen-item-fish-bone-trash"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-item-study-room-key-radio"
          name="kitchen-item-study-room-key"
          id="kitchen-item-study-room-key"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-item-battery-radio"
          name="kitchen-item-battery"
          id="kitchen-item-battery"
        />
        <input
          type="radio"
          class="trigger-radio kitchen-item-symbol-part-radio"
          name="kitchen-item-symbol-part"
          id="kitchen-item-symbol-part"
        />

        <!-- living room interaction checkbox -->
        <input
          type="checkbox"
          class="interaction-checkbox living-room-curtain-checkbox"
          name="living-room-curtain"
          id="living-room-curtain"
        />
        <input
          type="checkbox"
          class="interaction-checkbox living-room-tv-screen-checkbox"
          name="living-room-tv-screen"
          id="living-room-tv-screen"
        />

        <!-- living room interaction radio -->
        <input
          type="radio"
          class="trigger-radio living-room-door-locked-radio"
          name="living-room-door-locked-event"
          id="living-room-door-locked-event"
        />
        <input
          type="radio"
          class="trigger-radio living-room-unlock-door-radio"
          name="living-room-unlock-door-event"
          id="living-room-unlock-door-event"
        />
        <input
          type="radio"
          class="trigger-radio living-room-remote-not-working-radio"
          name="living-room-remote-not-working-event"
          id="living-room-remote-not-working-event"
        />
        <input
          type="radio"
          class="trigger-radio living-room-remote-place-battery-radio"
          name="living-room-remote-place-battery-event"
          id="living-room-remote-place-battery-event"
        />
        <input
          type="radio"
          class="trigger-radio living-room-unlock-main-door-radio"
          name="living-room-unlock-main-door-event"
          id="living-room-unlock-main-door-event"
        />

        <!-- living room events to take items radio -->
        <input
          type="radio"
          class="trigger-radio living-room-item-picture-radio"
          name="living-room-item-picture"
          id="living-room-item-picture"
        />
        <input
          type="radio"
          class="trigger-radio living-room-item-document-1-radio"
          name="living-room-item-document-1"
          id="living-room-item-document-1"
        />
        <input
          type="radio"
          class="trigger-radio living-room-item-hat-radio"
          name="living-room-item-hat"
          id="living-room-item-hat"
        />
        <input
          type="radio"
          class="trigger-radio living-room-item-remote-radio"
          name="living-room-item-remote"
          id="living-room-item-remote"
        />
        <input
          type="radio"
          class="trigger-radio living-room-item-chest-key-radio"
          name="living-room-item-chest-key"
          id="living-room-item-chest-key"
        />

        <!-- study room interaction radio -->
        <input
          type="radio"
          class="trigger-radio study-room-check-empty-symbol-radio"
          name="study-room-check-empty-symbol-event"
          id="study-room-check-empty-symbol-event"
        />
        <input
          type="radio"
          class="trigger-radio study-room-put-symbol-part-1-radio"
          name="study-room-put-symbol-part-1-event"
          id="study-room-put-symbol-part-1-event"
        />
        <input
          type="radio"
          class="trigger-radio study-room-put-symbol-part-2-radio"
          name="study-room-put-symbol-part-2-event"
          id="study-room-put-symbol-part-2-event"
        />

        <!-- study room events to take items radio -->
        <input
          type="radio"
          class="trigger-radio study-room-item-cupboard-key-radio"
          name="study-room-item-cupboard-key"
          id="study-room-item-cupboard-key"
        />
        <input
          type="radio"
          class="trigger-radio study-room-item-front-door-key-radio"
          name="study-room-item-front-door-key"
          id="study-room-item-front-door-key"
        />

        <!-- secret room interaction radio -->
        <input
          type="radio"
          class="trigger-radio secret-room-turn-on-power-radio"
          name="secret-room-turn-on-power-event"
          id="secret-room-turn-on-power-event"
        />
        <input
          type="radio"
          class="trigger-radio secret-room-chest-locked-radio"
          name="secret-room-chest-locked-event"
          id="secret-room-chest-locked-event"
        />
        <input
          type="radio"
          class="trigger-radio secret-room-chest-unlocked-radio"
          name="secret-room-chest-unlocked-event"
          id="secret-room-chest-unlocked-event"
        />

        <!-- secret room events to take items -->
        <input
          type="radio"
          class="trigger-radio secret-room-item-symbol-part-2-radio"
          name="secret-room-item-symbol-part-2"
          id="secret-room-item-symbol-part-2"
        />

        <!-- item description switcher -->
        <!-- BEDROOM -->
        <input
          type="radio"
          class="item-description-radio bedroom-paperball-1-description-radio"
          name="item-description"
          id="bedroom-paperball-1-description"
        />
        <input
          type="radio"
          class="item-description-radio bedroom-paperball-2-description-radio"
          name="item-description"
          id="bedroom-paperball-2-description"
        />
        <input
          type="radio"
          class="item-description-radio bedroom-key-description-radio"
          name="item-description"
          id="bedroom-key-description"
        />
        <input
          type="radio"
          class="item-description-radio item-mouse-spray-description-radio"
          name="item-description"
          id="item-mouse-spray-description"
        />

        <!-- KITCHEN -->
        <input
          type="radio"
          class="item-description-radio item-paperball-1-trash-description-radio"
          name="item-description"
          id="item-paperball-1-trash-description"
        />
        <input
          type="radio"
          class="item-description-radio item-paperball-2-trash-description-radio"
          name="item-description"
          id="item-paperball-2-trash-description"
        />
        <input
          type="radio"
          class="item-description-radio item-can-trash-description-radio"
          name="item-description"
          id="item-can-trash-description"
        />
        <input
          type="radio"
          class="item-description-radio item-fish-bone-trash-description-radio"
          name="item-description"
          id="item-fish-bone-trash-description"
        />
        <input
          type="radio"
          class="item-description-radio item-study-room-key-description-radio"
          name="item-description"
          id="item-study-room-key-description"
        />
        <input
          type="radio"
          class="item-description-radio item-battery-description-radio"
          name="item-description"
          id="item-battery-description"
        />
        <input
          type="radio"
          class="item-description-radio item-symbol-part-1-description-radio"
          name="item-description"
          id="item-symbol-part-1-description"
        />

        <!-- LIVING ROOM -->
        <input
          type="radio"
          class="item-description-radio item-picture-description-radio"
          name="item-description"
          id="item-picture-description"
        />
        <input
          type="radio"
          class="item-description-radio item-living-room-document-1-description-radio"
          name="item-description"
          id="item-living-room-document-1-description"
        />
        <input
          type="radio"
          class="item-description-radio item-hat-description-radio"
          name="item-description"
          id="item-hat-description"
        />
        <input
          type="radio"
          class="item-description-radio item-remote-description-radio"
          name="item-description"
          id="item-remote-description"
        />
        <input
          type="radio"
          class="item-description-radio item-chest-key-description-radio"
          name="item-description"
          id="item-chest-key-description"
        />

        <!-- STUDY ROOM -->
        <input
          type="radio"
          class="item-description-radio item-cupboard-key-description-radio"
          name="item-description"
          id="item-cupboard-key-description"
        />
        <input
          type="radio"
          class="item-description-radio item-front-door-key-description-radio"
          name="item-description"
          id="item-front-door-key-description"
        />

        <!-- SECRET ROOM -->
        <input
          type="radio"
          class="item-description-radio item-symbol-part-2-description-radio"
          name="item-description"
          id="item-symbol-part-2-description"
        />

        <input
          type="radio"
          class="scene-1-room-radio"
          name="scene-1-room"
          id="scene-1-room-1"
          checked
        />
        <div class="scene-1-room scene-1-room-1">
          <div class="scene-1-label">Dormitori<span class="last">o</span></div>

          <span class="scene-1-nav-1">
            <input type="reset" value="&#8634;" /><label for="scene-1-room-2">▶</label>
          </span>

          <!-- BEDROOM OBJECTS -->
          <!-- bedroom switch -->
          <label
            class="switch"
            for="bedroom-lamp"
            style="--object-x: 230px; --object-y: 150px"
          >
            <img src="assets/objects/switch.svg" alt />
          </label>

          <!-- bedroom door -->
          <label
            class="door-right-side-room"
            for="scene-1-room-2"
            style="--object-x: 278px; --object-y: 190px"
          ></label>
          <label
            class="door-right-side"
            for="open-door-event"
            style="--object-x: 273px; --object-y: 176px"
          >
            <img src="assets/objects/door.svg" alt />
          </label>
          <label
            class="door-right-side door-right-side-locked"
            for="door-locked-event"
            style="--object-x: 273px; --object-y: 176px"
          >
            <img src="assets/objects/door.svg" alt />
          </label>

          <!-- bedroom secret room -->
          <label
            class="secret-room-path"
            for="scene-1-room-5"
            style="--object-x: 45px; --object-y: 252px"
          ></label>
          <div
            class="secret-room-closed"
            style="--object-x: 40px; --object-y: 247px"
          ></div>

          <!-- bedroom bed -->
          <div class="bed" style="--object-x: 100px; --object-y: 170px">
            <img src="assets/objects/bed.svg" alt />
          </div>

          <!-- hat stand -->
          <div class="hat-stand" style="--object-x: 201px; --object-y: 135px">
            <img src="assets/objects/hat-stand.svg" alt />
          </div>
          <label
            class="hat-stand hat-stand-action"
            for="bedroom-place-hat-event"
            style="--object-x: 201px; --object-y: 135px"
          ></label>
          <div
            class="hat hat-on-stand"
            style="--object-x: 204px; --object-y: 120px"
          >
            <img src="assets/objects/hat.svg" alt />
          </div>

          <!-- bedroom cupboard -->
          <label
            class="cupboard cupboard-open"
            for="bedroom-cupboard-1"
            style="--object-x: 35px; --object-y: 190px"
          >
            <img src="assets/objects/cupboard-open.svg" alt />
          </label>
          <label
            class="spray mouse-spray"
            for="bedroom-item-mouse-spray"
            style="--object-x: 40px; --object-y: 212px"
          >
            <img src="assets/objects/mouse-spray.svg" alt />
          </label>
          <label
            class="paperball paperball-cupboard"
            for="bedroom-item-paperball-2"
            style="--object-x: 55px; --object-y: 215px"
          >
            <img src="assets/objects/paper-ball2.svg" alt />
          </label>
          <label
            class="cupboard cupboard-closed"
            for="bedroom-cupboard-1"
            style="--object-x: 35px; --object-y: 190px"
          >
            <img src="assets/objects/cupboard.svg" alt />
          </label>

          <!-- key inside the vase -->
          <label
            class="key-vertical"
            for="bedroom-item-key"
            style="--object-x: 40px; --object-y: 180px"
          >
            <img src="assets/objects/bedroom-key.svg" alt />
          </label>

          <!-- flower inside the vase -->
          <div class="flower" style="--object-x: 70px; --object-y: 180px">
            <img src="assets/objects/flower1.svg" alt />
          </div>

          <!-- bedroom vases -->
          <label
            class="vase"
            for="bedroom-vase-1-switch"
            style="--object-x: 35px; --object-y: 170px"
          >
            <img src="assets/objects/vase.svg" alt />
          </label>
          <label
            class="vase"
            for="bedroom-vase-2-switch"
            style="--object-x: 65px; --object-y: 170px"
          >
            <img src="assets/objects/vase.svg" alt />
          </label>

          <!-- paper ball under the bed -->
          <label
            class="paperball paperball-under-bed"
            for="bedroom-item-paperball-1"
            style="--object-x: 170px; --object-y: 250px"
          >
            <img src="assets/objects/paper-ball.svg" alt />
          </label>

          <!-- bedroom turned off -->
          <div class="scene-1-room room-dark">
            <label
              class="switch"
              for="bedroom-lamp"
              style="--object-x: 230px; --object-y: 150px"
            ></label>
          </div>

          <!-- bedroom message triggers -->
          <div class="room-message-board message-trigger-bedroom-turn-off">
            <span
              >Este sitio esta muy oscuro. Necesito un poco de luz para saber donde estoy
              <span class="last">.</span></span
            >
          </div>
          <div class="room-message-board message-trigger-bedroom-turn-on">
            <span
              >Finalmente puedo encender la luz. Parece un dormitorio. Necesito una llave
              para salir de esta habitacion<span class="last">.</span></span
            >
          </div>
          <div class="room-message-board message-trigger-bedroom-locked">
            <span
              >Oh, no! La puerta esta cerrada. Ahora llevo que encontrar la llave<span
                class="last"
                >.</span
              ></span
            >
          </div>
          <div class="room-message-board message-trigger-paperball-taken">
            <span
              >Hay una bola de papel debajo de la cama. Haz click en el papel para ver lo que pone dentro<span class="last"
                >.</span
              ></span
            >
          </div>
          <div class="room-message-board message-trigger-bedroom-key-taken">
            <span
              >Finalmente obtuve la llave del dormitorio! Ahora puedo abrir esta puerta con esta
              llave<span class="last">.</span></span
            >
          </div>
          <div class="room-message-board message-trigger-bedroom-unlocked">
            <span
              >La llave funciona. Ahora la puerta esta abierta y puedo salir.<span
                class="last"
                >.</span
              ></span
            >
          </div>
          <div class="room-message-board message-trigger-secret-room-unlocked">
            <span
              >El suelo se ha movido y una habitacion secreta se ha desbloqueado!<span class="last"
                >.</span
              ></span
            >
          </div>
        </div>

        <!-- ROOM 2 - KITCHEN -->
        <input
          type="radio"
          class="scene-1-room-radio"
          name="scene-1-room"
          id="scene-1-room-2"
        />
        <div class="scene-1-room scene-1-room-2">
          <div class="scene-1-label">Cocin<span class="last">a</span></div>

          <span class="scene-1-nav-2">
            <input type="reset" value="&#8634;" /><label for="scene-1-room-1">◀</label><label for="scene-1-room-3">▶</label>
          </span>

          <!-- kitchen left side door to bedroom -->
          <label
            class="door-left-side-room"
            for="scene-1-room-1"
            style="--object-x: 8px; --object-y: 227px"
          ></label>
          <div
            class="door-left-side"
            style="--object-x: 17px; --object-y: 203px"
          >
            <img src="assets/objects/door.svg" alt />
          </div>

          <!-- kitchen fridge -->
          <div class="fridge" style="--object-x: 5px; --object-y: 118px">
            <img src="assets/objects/fridge.svg" alt />
          </div>

          <!-- kitchen trash bin and inteactions trigger -->
          <div class="trash-bin" style="--object-x: 220px; --object-y: 188px">
            <img src="assets/objects/trash-bin.svg" alt />
          </div>
          <label
            class="trash-bin-opener trash-bin-for-fish-bone-trash"
            for="kitchen-put-fish-bone-trash-event"
            style="--object-x: 226px; --object-y: 188px"
          ></label>
          <label
            class="trash-bin-opener trash-bin-for-can-trash"
            for="kitchen-put-can-trash-event"
            style="--object-x: 226px; --object-y: 188px"
          ></label>
          <label
            class="trash-bin-opener trash-bin-for-paper-ball-2-trash"
            for="kitchen-put-paper-ball-2-trash-event"
            style="--object-x: 226px; --object-y: 188px"
          ></label>
          <label
            class="trash-bin-opener trash-bin-for-paper-ball-1-trash"
            for="kitchen-put-paper-ball-1-trash-event"
            style="--object-x: 226px; --object-y: 188px"
          ></label>

          <!-- kitchen oven -->
          <div class="oven" style="--object-x: 105px; --object-y: 143px">
            <img src="assets/objects/oven.svg" alt />
          </div>

          <!-- kitchen stove -->
          <div class="stove-fire" style="--object-x: 175px; --object-y: 142px">
            <img src="assets/objects/stove-fire.svg" alt />
          </div>
          <label
            class="gas-stove"
            for="kitchen-stove-switch"
            style="--object-x: 170px; --object-y: 152px"
          >
            <img src="assets/objects/gas-stove.svg" alt />
          </label>

          <!-- kitchen cabinets and items inside them -->
          <div
            class="cabinet cabinet-open-1"
            style="--object-x: 100px; --object-y: 180px"
          >
            <img src="assets/objects/cabinet-open.svg" alt />
          </div>
          <div
            class="cabinet cabinet-open-2"
            style="--object-x: 160px; --object-y: 180px"
          >
            <img src="assets/objects/cabinet-open.svg" alt />
          </div>
          <label
            class="battery"
            for="kitchen-item-battery"
            style="--object-x: 103px; --object-y: 194px"
          >
            <img src="assets/objects/battery.svg" alt />
          </label>
          <label
            class="symbol-part"
            for="kitchen-item-symbol-part"
            style="--object-x: 133px; --object-y: 194px"
          >
            <img src="assets/objects/symbol-part-1.svg" alt />
          </label>
          <label
            class="cabinet cabinet-1"
            for="kitchen-open-cabinet-1-event"
            style="--object-x: 100px; --object-y: 180px"
          >
            <img src="assets/objects/cabinet.svg" alt />
          </label>
          <div
            class="cabinet cabinet-1-locked"
            style="--object-x: 100px; --object-y: 180px"
          ></div>
          <div
            class="cabinet cabinet-2"
            style="--object-x: 160px; --object-y: 180px"
          >
            <img src="assets/objects/cabinet.svg" alt />
          </div>

          <!-- kitchen trash -->
          <label
            class="mess paper-ball-1-trash"
            for="kitchen-item-paper-ball-1-trash"
            style="--object-x: 120px; --object-y: 250px"
          >
            <img src="assets/objects/paper-ball.svg" alt />
          </label>
          <label
            class="mess paper-ball-2-trash"
            for="kitchen-item-paper-ball-2-trash"
            style="--object-x: 80px; --object-y: 270px"
          >
            <img src="assets/objects/paper-ball2.svg" alt />
          </label>
          <label
            class="mess can-trash"
            for="kitchen-item-can-trash"
            style="--object-x: 250px; --object-y: 270px"
          >
            <img src="assets/objects/can.svg" alt />
          </label>
          <label
            class="mess fish-bone-trash"
            for="kitchen-item-fish-bone-trash"
            style="--object-x: 190px; --object-y: 240px"
          >
            <img src="assets/objects/fishbone.svg" alt />
          </label>

          <!-- mouse and interactions -->
          <label
            class="mouse"
            for="kitchen-kill-mouse-event"
            style="--object-x: 260px; --object-y: 230px"
          >
            <img src="assets/objects/mouse.svg" alt />
          </label>
          <div
            class="mouse mouse-locked"
            style="--object-x: 260px; --object-y: 230px"
          ></div>
          <label
            class="study-room-key"
            for="kitchen-item-study-room-key"
            style="--object-x: 260px; --object-y: 237px"
          >
            <img src="assets/objects/study-room-key.svg" alt />
          </label>

          <!-- kitchen switch -->
          <label
            class="switch"
            for="kitchen-lamp"
            style="--object-x: 230px; --object-y: 150px"
          >
            <img src="assets/objects/switch.svg" alt />
          </label>

          <!-- kitchen turned off -->
          <div class="scene-1-room room-dark">
            <label
              class="switch"
              for="kitchen-lamp"
              style="--object-x: 230px; --object-y: 150px"
            ></label>
          </div>

          <!-- kitchen message triggers -->
          <div class="room-message-board message-trigger-kitchen-turn-off">
            <span
              >¡Luz apagada! Voy a intentar encenderla...<span class="last"
                >!</span
              ></span
            >
          </div>

          <div class="room-message-board message-trigger-kitchen-turn-on">
            <span
              >¡Luces encendidas! Oh, mira este lio. Parece que esta sucio desde hace
              tiempo<span class="last">.</span></span
            >
          </div>

          <div
            class="room-message-board message-trigger-kitchen-all-trash-collected"
          >
            <span
              >Ahora, pongamos toda la basura en la papelera. Pulsa repetidamente la parte gris de esta para introducirlo dentro.<span
                class="last"
                >.</span
              ></span
            >
          </div>

          <div class="room-message-board message-trigger-kitchen-all-trash-put">
            <span
              >Ahora si... ¡Pero que asco! ¡Un raton!
              Tiene una llave con él! Voy a darle con el Raton-Spray para matarlo y hacerme con la llave.<span
                class="last"
                >.</span
              ></span
            >
          </div>

          <div class="room-message-board message-trigger-kitchen-mouse-died">
            <span
              >Gracias por el spray para ratones, el raton ha muerto. La llave esta a su lado.
              <span class="last">.</span></span
            >
          </div>

          <div class="room-message-board message-trigger-kitchen-got-key">
            <span
              >Tengo la llave del raton. Me pregunto que tipo de habitacion puede abrir<span class="last">.</span></span
            >
          </div>

          <div class="room-message-board message-trigger-kitchen-got-battery">
            <span
              >Tengo la bateria. Parece que puedo hacer que algo funcione con
              esto<span class="last">.</span></span
            >
          </div>

          <div
            class="room-message-board message-trigger-kitchen-got-symbol-part"
          >
            <span
              >Tengo la parte izquierda del emblema.Busquemos otro
              <span class="last">.</span></span
            >
          </div>
        </div>

        <!-- ROOM 3 - LIVING ROOM -->
        <input
          type="radio"
          class="scene-1-room-radio"
          name="scene-1-room"
          id="scene-1-room-3"
        />
        <div class="scene-1-room scene-1-room-3">
          <div class="scene-1-label">Comedor<span class="last">r</span></div>

          <span class="scene-1-nav-3">
            <input type="reset" value="&#8634;" /><label for="scene-1-room-2">◀</label><label for="scene-1-room-4">▶</label>
          </span>

          <!-- front door -->
          <label
            class="door-front-escape"
            for="ending"
            style="--object-x: 118px; --object-y: 162px"
          >
          </label>
          <label
            class="door-front door-front-trigger"
            for="living-room-unlock-main-door-event"
            style="--object-x: 118px; --object-y: 154px"
          >
            <img src="assets/objects/door.svg" alt />
          </label>
          <div
            class="door-front door-front-locked"
            style="--object-x: 118px; --object-y: 154px"
          ></div>

          <!-- sofa and hat -->
          <div class="sofa" style="--object-x: 22px; --object-y: 180px">
            <img src="assets/objects/sofa1.svg" alt />
          </div>
          <label
            class="hat"
            for="living-room-item-hat"
            style="--object-x: 36px; --object-y: 182px"
          >
            <img src="assets/objects/hat.svg" alt />
          </label>

          <!-- window and curtain -->
          <label
            class="window"
            for="living-room-curtain"
            style="--object-x: 25px; --object-y: 100px"
          >
            <img src="assets/objects/window.svg" alt />
          </label>
          <label
            class="curtain"
            for="living-room-curtain"
            style="--object-x: 20px; --object-y: 92px"
          >
            <img src="assets/objects/curtains.svg" alt />
          </label>

          <!-- TV and interactions -->
          <div class="tv" style="--object-x: 200px; --object-y: 160px">
            <img src="assets/objects/tv.svg" alt />
          </div>
          <label
            class="tv-screen"
            for="living-room-tv-screen"
            style="--object-x: 204px; --object-y: 169px"
          >
            <label
              class="chest-key"
              for="living-room-item-chest-key"
              style="--object-x: 11px; --object-y: 3px"
            >
              <img src="assets/objects/chest-key.svg" alt />
            </label>
          </label>

          <!-- living room shelf -->
          <div
            class="living-room-shelf"
            style="--object-x: 190px; --object-y: 186px"
          >
            <img src="assets/objects/shelf.svg" alt />
          </div>

          <!-- living room paper document -->
          <label
            class="paperball living-room-document-1"
            for="living-room-item-document-1"
            style="--object-x: 232px; --object-y: 209px"
          >
            <img src="assets/objects/paper-ball2.svg" alt />
          </label>

          <!-- table -->
          <div class="table" style="--object-x: 185px; --object-y: 226px">
            <img src="assets/objects/table2.svg" alt />
          </div>

          <!-- remote -->
          <label
            class="remote"
            for="living-room-item-remote"
            style="--object-x: 194px; --object-y: 243px"
          >
            <img src="assets/objects/remote.svg" alt />
          </label>
          <label
            class="remote remote-place-battery"
            for="living-room-remote-place-battery-event"
            style="--object-x: 194px; --object-y: 243px"
          >
            <img src="assets/objects/remote.svg" alt />
          </label>
          <label
            class="remote remote-not-working"
            for="living-room-remote-not-working-event"
            style="--object-x: 194px; --object-y: 243px"
          >
            <img src="assets/objects/remote.svg" alt />
          </label>

          <!-- picture -->
          <label
            class="picture"
            for="living-room-item-picture"
            style="--object-x: 204px; --object-y: 243px"
          >
            <img src="assets/objects/picture.svg" alt />
          </label>

          <!-- living room right side door to study room -->
          <label
            class="door-right-side-room"
            for="scene-1-room-4"
            style="--object-x: 278px; --object-y: 190px"
          ></label>
          <label
            class="door-right-side living-room-unlock-door"
            for="living-room-unlock-door-event"
            style="--object-x: 273px; --object-y: 176px"
          >
            <img src="assets/objects/door.svg" alt />
          </label>
          <label
            class="door-right-side living-room-door-locked"
            for="living-room-door-locked-event"
            style="--object-x: 273px; --object-y: 176px"
          >
            <img src="assets/objects/door.svg" alt />
          </label>

          <!-- living room message triggers -->
          <div
            class="room-message-board message-trigger-living-room-first-time"
          >
            <span
              >Ahora veamos que tipo de cosas podemos encontrar en esta habitacion<span
                class="last"
                >.</span
              ></span
            >
          </div>

          <div
            class="room-message-board message-trigger-living-room-take-picture-of-wendo"
          >
            <span
              >Esta foto me describe la clave Wendo. Por cierto, ¿que es
              Wendo<span class="last">?</span></span
            >
          </div>

          <div
            class="room-message-board message-trigger-living-room-study-room-door-locked"
          >
            <span
              >Esta habitacion esta cerrada. Tal vez pueda encontrar alguna llave para abrirlo.<span
                class="last"
                >.</span
              ></span
            >
          </div>

          <div
            class="room-message-board message-trigger-living-room-remote-not-working"
          >
            <span
              >Este control remoto no funciona para encender el televisor. Tal vez pueda encontrar
              la bateria en alguna parte<span class="last">.</span></span
            >
          </div>

          <div
            class="room-message-board message-trigger-living-room-study-room-door-unlocked"
          >
            <span
              >¡La llave funciona! Ahora averiguemos que cosas hay en este
              habitacion<span class="last">.</span></span
            >
          </div>

          <div class="room-message-board message-trigger-hat-taken">
            <span
              >Hola sombrero. ¿Que haces en este sofa? Vamos, mejor te llevo al ropero de la habitacion del principio...<span class="last">.</span></span
            >
          </div>

          <div
            class="room-message-board message-trigger-living-room-battery-plugged"
          >
            <span
              >La bateria ahora esta en el control remoto. Ahora puedo usarlo para encender la TV<span
                class="last"
                >.</span
              ></span
            >
          </div>

          <div
            class="room-message-board message-trigger-living-room-main-door-unlocked"
          >
            <span
              >¡OH SI! La puerta principal esta desbloqueada. Ahora es el momento de escapar antes de que venga alguien a hacerme algo!<span
                class="last"
                >.</span
              ></span
            >
          </div>
        </div>

        <!-- ROOM 4 - STUDY ROOM -->
        <input
          type="radio"
          class="scene-1-room-radio"
          name="scene-1-room"
          id="scene-1-room-4"
        />
        <div class="scene-1-room scene-1-room-4">
          <div class="scene-1-label">Habitacion de estudi<span class="last">o</span></div>

          <span class="scene-1-nav-4">
            <input type="reset" value="&#8634;" /><label for="scene-1-room-3">◀</label>
          </span>

          <!-- study room left side room to living room -->
          <label
            class="door-left-side-room"
            for="scene-1-room-3"
            style="--object-x: 8px; --object-y: 227px"
          ></label>
          <div
            class="door-left-side"
            style="--object-x: 17px; --object-y: 203px"
          >
            <img src="assets/objects/door.svg" alt />
          </div>

          <!-- bookshelf and secret -->
          <div
            class="bookshelf-secret"
            style="--object-x: 64px; --object-y: 147px"
          ></div>
          <label
            class="front-door-key"
            for="study-room-item-front-door-key"
            style="--object-x: 95px; --object-y: 207px"
          >
            <img src="assets/objects/front-door-key.svg" alt />
          </label>
          <div class="bookshelf" style="--object-x: 54px; --object-y: 138px">
            <img src="assets/objects/bookshelf.svg" alt />
          </div>

          <!-- study room table -->
          <div class="table" style="--object-x: 170px; --object-y: 190px">
            <img src="assets/objects/table.svg" alt />
          </div>

          <!-- book and place to put Wendo emblem -->
          <div class="book" style="--object-x: 195px; --object-y: 185px">
            <img src="assets/objects/book.svg" alt />
          </div>
          <label
            class="emblem-put emblem-put-left"
            for="study-room-put-symbol-part-1-event"
            style="--object-x: 200px; --object-y: 189px"
          >
          </label>
          <div
            class="emblem-put emblem-put-left-installed"
            style="--object-x: 200.7px; --object-y: 188.1px"
          >
            <img src="assets/objects/symbol-part-1.svg" alt />
          </div>
          <div
            class="emblem-put emblem-put-left-locked"
            style="--object-x: 200px; --object-y: 189px"
          ></div>
          <label
            class="emblem-put emblem-put-right"
            for="study-room-put-symbol-part-2-event"
            style="--object-x: 210px; --object-y: 189px"
          >
          </label>
          <label
            class="emblem-put emblem-put-right-installed"
            for="study-room-check-empty-symbol-event"
            style="--object-x: 209.4px; --object-y: 188.1px"
          >
            <img src="assets/objects/symbol-part-2.svg" alt />
          </label>
          <label
            class="emblem-put emblem-put-right-locked"
            for="study-room-check-empty-symbol-event"
            style="--object-x: 210px; --object-y: 189px"
          >
          </label>

          <!-- cupboard key -->
          <label
            class="key cupboard-key"
            for="study-room-item-cupboard-key"
            style="--object-x: 246px; --object-y: 231px"
          >
            <img src="assets/objects/cupboard-key.svg" alt />
          </label>

          <div class="scene-1-room room-dark"></div>

          <div class="room-message-board message-trigger-study-room-turn-off">
            <span
              >Esta habitacion tambien esta oscura. Parece que hay un interruptor para encender
              en<span class="last">.</span></span
            >
          </div>
          <div class="room-message-board message-trigger-study-room-turn-on">
            <span
              >¡Ha vuelto la luz! Veamos que hay por aqui...<span
                class="last"
                >.</span
              ></span
            >
          </div>
          <div
            class="room-message-board message-trigger-study-room-got-cupboard-key"
          >
            <span
              >Tengo otra llave. Basado en este color, esta llave parece no
              ser la llave de una habitacion, sino la de un armario de la cocina!<span class="last">.</span></span
            >
          </div>
          <div class="room-message-board message-trigger-check-symbol-on-book">
            <span
              >Este libro tiene un simbolo perdido. Tal vez necesito poner algo
              en eso<span class="last">.</span></span
            >
          </div>
          <div
            class="room-message-board message-trigger-study-room-bookshelf-opened"
          >
            <span
              >Despues de colocar las piezas del emblema de Wendo, de repente la estanteria se
              abrio y aparecio con ello una llave!<span class="last">.</span></span
            >
          </div>
          <div
            class="room-message-board message-trigger-study-room-front-door-key-taken"
          >
            <span
              >Voy a coger la llave. Volvamos al comedor y abramos la puerta principal para salir de este sitio!
          <span class="last">.</span></span
            >
          </div>
        </div>

        <!-- ROOM 5 - SECRET ROOM -->
        <input
          type="radio"
          class="scene-1-room-radio"
          name="scene-1-room"
          id="scene-1-room-5"
        />
        <div class="scene-1-room scene-1-room-5">
          <div class="scene-1-label">Habitacion secret<span class="last">a</span></div>

          <span class="scene-1-nav-5">
            <input type="reset" value="&#8634;" /><label for="scene-1-room-1">◀</label>
          </span>

          <label
            class="power-switch"
            for="secret-room-turn-on-power-event"
            style="--object-x: 225px; --object-y: 150px"
          >
            <img src="assets/objects/power-switch.svg" alt />
          </label>

          <div class="chest-open" style="--object-x: 50px; --object-y: 161px">
            <img src="assets/objects/chest-open.svg" alt />
          </div>
          <label
            class="symbol-part"
            for="secret-room-item-symbol-part-2"
            style="--object-x: 87px; --object-y: 177px"
          >
            <img src="assets/objects/symbol-part-2.svg" alt />
          </label>
          <label
            class="chest"
            for="secret-room-chest-unlocked-event"
            style="--object-x: 50px; --object-y: 172px"
          >
            <img src="assets/objects/chest.svg" alt />
          </label>
          <label
            class="chest chest-locked"
            for="secret-room-chest-locked-event"
            style="--object-x: 50px; --object-y: 172px"
          ></label>

          <div
            class="room-message-board message-trigger-secret-room-first-time"
          >
            <span
              >Parece que esta es una habitacion secreta. Ahora veamos que cosas podemos
              usar para escapar<span class="last">.</span></span
            >
          </div>
          <div
            class="room-message-board message-trigger-secret-room-switch-power"
          >
            <span
              >He abierto la luz de la habitación del final a la derecha, voy a mirar que hay alli.<span
                class="last"
                >.</span
              ></span
            >
          </div>
          <div
            class="room-message-board message-trigger-secret-room-chest-locked"
          >
            <span
              >Cofre cerrado. Me pregunto si puedo abrirlo y obtener lo que hay dentro<span class="last">.</span></span
            >
          </div>
          <div
            class="room-message-board message-trigger-secret-room-chest-unlocked"
          >
            <span
              >¡Ay ay! ¡Tenemos el tesoro! Espero que haya algo interesante...<span class="last">.</span></span
            >
          </div>
          <div
            class="room-message-board message-trigger-secret-room-got-symbol-part"
          >
            <span
              >Tengo la parte correcta del emblema de Wendo. tal vez no hay nada
              mas en este cofre y tengo que ir a la habitacion de estudio para continuar con esta mision...<span class="last">.</span></span
            >
          </div>
        </div>

        <div class="items-board">
          <span>ITEM<span class="last">S</span></span>

          <div class="items-list">
            <!-- FROM BEDROOM -->
            <label
              class="item-block item-paperball-1-block"
              for="bedroom-paperball-1-description"
            >
              <img src="assets/items/item-document.svg" alt />
            </label>
            <label
              class="item-block item-paperball-2-block"
              for="bedroom-paperball-2-description"
            >
              <img src="assets/items/note.svg" alt />
            </label>
            <label
              class="item-block item-bedroom-key-block"
              for="bedroom-key-description"
            >
              <img src="assets/items/bedroom-key.svg" alt />
            </label>
            <label
              class="item-block item-mouse-spray-block"
              for="item-mouse-spray-description"
            >
              <img src="assets/items/mouse-spray.svg" alt />
            </label>

            <!-- FROM KITCHEN -->
            <label
              class="item-block item-paperball-1-trash-block"
              for="item-paperball-1-trash-description"
            >
              <img src="assets/items/paper-ball.svg" alt />
            </label>
            <label
              class="item-block item-paperball-2-trash-block"
              for="item-paperball-2-trash-description"
            >
              <img src="assets/items/paper-ball2.svg" alt />
            </label>
            <label
              class="item-block item-can-trash-block"
              for="item-can-trash-description"
            >
              <img src="assets/items/can.svg" alt />
            </label>
            <label
              class="item-block item-fish-bone-trash-block"
              for="item-fish-bone-trash-description"
            >
              <img src="assets/items/fishbone.svg" alt />
            </label>
            <label
              class="item-block item-study-room-key-block"
              for="item-study-room-key-description"
            >
              <img src="assets/items/study-room-key.svg" alt />
            </label>
            <label
              class="item-block item-battery-block"
              for="item-battery-description"
            >
              <img src="assets/items/battery.svg" alt />
            </label>
            <label
              class="item-block item-symbol-part-1-block"
              for="item-symbol-part-1-description"
            >
              <img src="assets/items/symbol-part-1.svg" alt />
            </label>

            <!-- FROM LIVING ROOM -->
            <label
              class="item-block item-living-room-document-1-block"
              for="item-living-room-document-1-description"
            >
              <img src="assets/items/item-document.svg" alt />
            </label>
            <label
              class="item-block item-picture-block"
              for="item-picture-description"
            >
              <img src="assets/items/picture.svg" alt />
            </label>
            <label class="item-block item-hat-block" for="item-hat-description">
              <img src="assets/items/hat.svg" alt />
            </label>
            <label
              class="item-block item-remote-block"
              for="item-remote-description"
            >
              <img src="assets/items/remote.svg" alt />
            </label>
            <label
              class="item-block item-chest-key-block"
              for="item-chest-key-description"
            >
              <img src="assets/items/chest-key.svg" alt />
            </label>

            <!-- FROM STUDY ROOM -->
            <label
              class="item-block item-cupboard-key-block"
              for="item-cupboard-key-description"
            >
              <img src="assets/items/cupboard-key.svg" alt />
            </label>
            <label
              class="item-block item-front-door-key-block"
              for="item-front-door-key-description"
            >
              <img src="assets/items/front-door-key.svg" alt />
            </label>

            <!-- FROM SECRET ROOM -->
            <label
              class="item-block item-symbol-part-2-block"
              for="item-symbol-part-2-description"
            >
              <img src="assets/items/symbol-part-2.svg" alt />
            </label>
          </div>
        </div>

        <!-- items description board -->
        <!-- BEDROOM -->
        <div class="items-description-board paperball-1-description">
          <span>
            <strong>Bola de papel</strong><br />
            <br />
            Hay algo escrito en este papel.<br />
            <br />
            <em>
              Hay una llave para salir del dormitorio. Tienes que encontrarlo
               dentro del cajon y usarlo
               para dar el primer paso y escapar!<br />
              <br />
        
            </em>
          </span>
        </div>
        <div class="items-description-board paperball-2-description">
          <span>
            <strong>Intrucciones para el producto para ratones</strong><br />
            <br />
            Leer las instrucciones<br />
            <br />
            <em>
              MouseTicida - Olor Guindilla<br />
              <br />
              Para matar ratpnes, solo dales un spray y seran
               asesinados por un instante. <br />
              <br />
    
            </em>
          </span>
        </div>
        <div class="items-description-board bedroom-key-description">
          <span>
            <strong>Llave dormitorio</strong><br />
            <br />
            Parece que es util para abrir la puerta del dormitorio.
          </span>
        </div>
        <div class="items-description-board item-mouse-spray-description">
          <span>
            <strong>Spray-Raton</strong><br />
            <br />
            Para matar al raton se necesito solo un poquito de spray.
          </span>
        </div>

        <!-- KITCHEN -->
        <div class="items-description-board item-paperball-1-trash-description">
          <span>
            <strong>Basura de papel #1</strong><br />
            <br />
            Este papel es basura. Vamos a ponerlo en la papelera.
          </span>
        </div>
        <div class="items-description-board item-paperball-2-trash-description">
          <span>
            <strong>Basura de papel #2</strong><br />
            <br />
            Hola, Sr. papel. Vamos a ponerte en tu casa la papelera.
          </span>
        </div>
        <div class="items-description-board item-can-trash-description">
          <span>
            <strong>Lata de bebida con gas</strong><br />
            <br />
            Esta lata era una bebida de coca cola. Ver esto me da muchísima sed!
          </span>
        </div>
        <div class="items-description-board item-fish-bone-trash-description">
          <span>
            <strong>Hueso de pescado</strong><br />
            <br />
            Hola, Sr. pescado podrido. ¡Que asco das! Mejor te tiro a la basura.
          </span>
        </div>
        <div class="items-description-board item-study-room-key-description">
          <span>
            <strong>Llave de la sala de estudio</strong><br />
            <br />
            Tengo esta llave del raton. Tal vez se puede utilizar para desbloquear
             otra habitacion.
          </span>
        </div>
        <div class="items-description-board item-battery-description">
          <span>
            <strong>Bateria</strong><br />
            <br />
            Batería de Rango A2. Devuelve la vida al dispositivo electronico como el mando de la TV.
          </span>
        </div>
        <div class="items-description-board item-symbol-part-1-description">
          <span>
            <strong>Emblema de Wendo (parte izquierda)</strong><br />
            <br />
            Esta es una parte izquierda del emblema de Wendo para desbloquear el tesoro escondido.
          </span>
        </div>

        <!-- LIVING ROOM -->
        <div class="items-description-board item-picture-description">
          <span>
            <strong>Foto de Wendo</strong><br />
            <br />
            Esta imagen describe el símbolo de Wendo.<br />
            <img
              src="assets/objects/picture-of-wendo.svg"
              alt
              style="width: 100px"
            /><br />
            <br />
            Tambien hay una nota:<br />
            <br />
            <em>
              Wendo es el simbolo que sera la clave para que consigas escapar.
              Hay dos piezas del simbolo, la parte izquierda y la parte derecha. Una parte
              esta ubicado en el armario (no se que armario), y olvide 
              donde se encuentran otras piezas. El resto de la pieza del simbolo
              sera su tarea para encontrarla.<br />
              <br />
              Buena suerte!<br />
              <br />
             Codigo nota: #1823
            </em>
          </span>
        </div>
        <div
          class="items-description-board item-living-room-document-1-description"
        >
          <span>
            <strong>Documento de la habitacion de trabajo</strong><br />
            <br />
            El documento esta escrito debajo.<br />
            <br />
            <em>
              Siempre trabajo en mi cuarto de trabajo, que se encuentra al lado de este
               habitacion, pero esta  no tiene luz. La luz se encuentra en
               en algun lugar escondido. Necesitas algo para descubrir ese lugar.<br />
              <br />
              Pista: ¿Crees que algun atuendo que suelo usar afuera? Eso es clave
               para poder abrir el lugar secreto.<br />
              <br />
              Codigo nota: #1824
            </em>
          </span>
        </div>
        <div class="items-description-board item-hat-description">
          <span>
            <strong>Sombrero</strong><br />
            <br />
            Un sombrero de moda. Ponlo en el perchero para poder continuar tu mision.
          </span>
        </div>
        <div class="items-description-board item-remote-description">
          <span>
            <strong>Mando remoto</strong><br />
            <br />
            Control remoto de TV. Te lleva a todos tus canales favoritos.
             Solo un click en su mando remoto y su televisor esta magicamente encendido.
          </span>
        </div>
        <div class="items-description-board item-chest-key-description">
          <span>
            <strong>Llave del cofre</strong><br />
            <br />
            Solo necesitas encontrar el cofre del tesoro para que esto sea util.
          </span>
        </div>

        <!-- STUDY ROOM -->
        <div class="items-description-board item-cupboard-key-description">
          <span>
            <strong>Llave rara</strong><br />
            <br />
            Segun el color clave, parece que pertenece a la cocina.
          </span>
        </div>
        <div class="items-description-board item-front-door-key-description">
          <span>
            <strong>Llave de la puerta principal</strong><br />
            <br />
            Parece que se puede usar para abrir la puerta principal y obtener aire fresco afuera.
          </span>
        </div>

        <!-- SECRET ROOM -->
        <div class="items-description-board item-symbol-part-2-description">
          <span>
            <strong>Emblema Wendo (parte derecha)</strong><br />
            <br />
            Esta es la parte derecha del emblema de Wendo para desbloquear el tesoro escondido.
          </span>
        </div>
      </form>

      <input type="radio" name="scene" class="scene-radio" id="ending" />
      <div class="scene ending">
        <span class="ending-label">
         Has salido de la casa<span class="last">!</span>
        </span>

        <span class="ending-label">
          Miras alrededor y te das cuenta que...<span class="last">!</span>
          <br>
          <br>
          <a href="congratulations.php" class="action-btn"
            >Continuar</a>
        </span>

        <span class="ending-label">
          
        </span>
      </div>

      <div class="scene scene-closure-bottom"></div>
      <div class="scene scene-closure-left"></div>
      <div class="scene scene-closure-right"></div>
    </div>
  </body>
</html>
