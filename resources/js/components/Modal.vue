<template>
  <transition name="modal">
    <div class="modal-mask" @click="cancelDialog">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header"></slot>
          </div>


          <div class="modal-body">
            <slot name="body"></slot>
          </div>

          <div class="modal-footer">
            <button @click="$emit('cancel')">Cancel</button>
            <slot name="footer">
              <div></div>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "Modal", methods: {
    cancelDialog(evt) {
      if (evt.target.className === "modal-mask" || evt.target.className === "modal-wrapper") {
        this.$emit('cancel');
      }
    }
  }
}
</script>

<style lang="scss">
.modal-mask {
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: table;
  transition: opacity 0.3s ease;

  .modal-wrapper {
    margin: 2rem 10px 10px 10px;

    .modal-container {
      max-width: 400px;
      margin: 0 auto;
      border-radius: 2px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
      transition: all 0.3s ease;
      font-family: Helvetica, Arial, sans-serif;

      .modal-header {
        background-color: #A3A3A3;
        padding: 10px;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        text-align: center;
      }

      .modal-body {
        padding: 20px;
        background-color: #fff;
        max-height: 550px;
        overflow: auto;

        input {
          margin: 5px 0;
          height: 30px;
        }

        textarea {
          margin: 5px 0;
        }
      }

      .modal-footer {
        padding: 10px;
        background-color: #fff;
        display: flex;
        justify-content: space-between;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;

        button {
          background-color: #F6F6F6;
          border: none;
          padding: 5px;
          width: 70px;
          color: #22313F;
          border-radius: 10px;
          cursor: pointer;
          text-transform: uppercase;
          outline: none;
          font-weight: 600;
        }
      }

      .modal-enter {
        opacity: 0;
      }

      .modal-leave-active {
        opacity: 0;
      }

      .modal-enter .modal-container,
      .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
      }
    }
  }
}
</style>
