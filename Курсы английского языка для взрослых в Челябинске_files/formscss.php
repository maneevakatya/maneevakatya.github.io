
/*/ds-comf/ds-form/css/dsforms.css*/
/*  --------------------------------------------------
  Global style
  -------------------------------------------------- */
form > div[class^="field"] {
  margin: 15px 0;
  
}
form div[class^="field"] .focusout {
  box-shadow: 0 0 5px #A0C2F9;
  border-color: #A0C2F9;
}

form div[class^="field"] .alert,.improper-value {
  box-shadow: 0 0 5px red;
  border-color: red;
}
form div[class^="field"] label .required {
  color: red;
}
.error-report {
  text-align: center;
  padding: 20px;
}
.error-report .head-report {
  font-size: 26px;
  font-weight: bold;
  margin-bottom: 20px;
}
.error-report .text-report {
  margin-top: 20px;
  font-size: 18px;
}
.error-report .text-report p {
  margin: 5px 0;
  color: #181919;
font-family: "Open Sans";
font-size: 14px;
font-weight: 400;
line-height: 16px;
    text-align: center;
}

.error_form ul {
  padding: 5px;
  list-style-position: inside;
  margin: 0;
}
.error_form ul li {
  list-style-type: none;
  padding: 2px;
  color: red;
}

#form-zayavka .error_form{
	display: none;
}
.loadform, 
.loadbuttom {
  display: none;
}
.loadform {
  margin: auto;
  position: relative;
  top: calc(50% - 80px);
}
.loadbuttom {
  margin: 0 10px;
}
.main_slid #zayavka{
	    min-height: 377px;
}
.ds-form label{
  display: inline-block;
  width: 150px;
  vertical-align: top;
}
.form-head {
 /* border-bottom: 2px solid;*/
  font-family: sans-serif;
  font-size: 1.5em;
  font-weight: 700;
}
.dsform-cal-btn{
background:  url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAD3SURBVFiF7ZRNDoIwEIXf+MadeiYTV+o9vIZ6RpcaF8Ix0HEB+ENSWkIRF33JpC19bT+azgAeEdxSNKdoRnAd2+8VRTOKWhnTW2y/BGxon+O7Fa1ruvonPoChpU3iWrH/1HXO6DfQBjCr2vz9SbKqM4/gbwcguAQAmO3KTSWTsg+Cq77+98JXynzHRPTkIF9QeO3rr8MJUAbPVTFRAEpwQ+Elnl9NXK+zoUfVhj7aYL8Gbtg1W4L9f52GCeAncj7CZm331f6u87VGv4EEEFoJB9PoN5AAnAB3K+Qz+syL4dgZIJYUejDBfhQA3+GDAoQcDqQ6kACAJ1q0luRTOjZaAAAAAElFTkSuQmCC') no-repeat 50% 50% / 80%;
height: 20px;
width: 20px;
vertical-align: middle;
display: inline-block;
border-radius: 2px;
cursor: pointer;
}
.dsform-cal-btn.cal-chosen{
background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAADjSURBVFiF7ZZBCsIwEEUn0qV6JsFV9R6eQ8/oUnFhew6fC6egodNEmtiC+VASOj/JS5iEEQkI2AMt0AB1an9QOlGne2q/i5iQjwHODY751r8IAeRW5RN3Sr1Ta53JT8AEAJbabd9+NxpbjfUHAURko+1BJ220LyKyTeB/CVtnY6dr4JbAD8AQAMAFqIFKvx1wTejHQX92enpoG5u00f5YgGya7zUsAL9SZQX8t91P1rHxTpOfQAEoD1EBMAGcpzFxETmZBGahEPDFxoHjUD2QFSC0eFaAmMUhviLKpvnegr8BeALlvmm00+8QOgAAAABJRU5ErkJggg==') no-repeat 50% 50% / 80%, #999;
}
.dsform-cal-layer{
   display: inline;
   position: relative;
}
/*	--------------------------------------------------
	Style dspopup Modals
	-------------------------------------------------- */
.dspopup-modal-bg {
  position: fixed;
  height: 100%;
  width: 100%;
  background: #000;
  background: rgba(0, 0, 0, 0.6);
  z-index: 8000;
  display: none;
  top: 0;
  left: 0;
}
.dspopup-modal {
  /*visibility: hidden;*/
  display: none;
  width: 500px;
  background-color: #f5f5f5;
  position: fixed;
  z-index: 8001;
  padding: 30px 40px 34px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
  -box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
}
.dspopup-modal.small {
  width: 200px;
  margin-left: -140px;
}
.dspopup-modal.medium {
  width: 400px;
  margin-left: -240px;
}
.dspopup-modal.large {
  width: 600px;
  margin-left: -340px;
}
.dspopup-modal.xlarge {
  width: 800px;
  margin-left: -440px;
}
.dspopup-modal .close-dspopup-modal {
  font-size: 22px;
  line-height: .5;
  position: absolute;
  top: 0px;
right: 0px;
  color: #aaa;
  text-shadow: 0 -1px 1px rbga(0, 0, 0, 0.6);
  font-weight: bold;
  cursor: pointer;
  width: 30px;
  height: 30px;
  background: url(images/close_circle.png) no-repeat;
}
.dspopup-modal .close-dspopup-modal:hover {
  background-position: 0 100%;
}



/*  --------------------------------------------------
  Calendar style
  -------------------------------------------------- */

table.dscalendar-table td {
  color: #333333;
  line-height: 1.5em;
  min-width: 1.5em;
  padding: 0;
  text-align: center;
  vertical-align: middle;
  background: #fefefe;
}
table.dscalendar-table tbody td{
  box-shadow: 0 0 1px #ccc;
}
table.dscalendar-table td.crrnt-day {
    background: skyblue;
    color: #FFFFFF;
}
table.dscalendar-table tbody td{
   cursor: default;
}
table.dscalendar-table tbody td:not(.nodate):hover{
   background: #e0eeff;
   color: black;
}

table.dscalendar-table td.nodate{
background: whitesmoke;
}
table.dscalendar-table thead td{
border-bottom: none;
}
table.dscalendar-table {
    font-family: Helvetica,sans-serif;
    font-size: 1em;
    border-collapse: separate;
    border-spacing: 0px;
    border: 1px solid silver;
    position: absolute;
    z-index: 999;
    right: 0;
    top: 24px;
}
table.dscalendar-table td.mth-hdr {
  padding-left: 25px;
  padding-right: 25px;
  position: relative;
  text-align: center;
  background: whitesmoke;
  color: gray;
}
table.dscalendar-table thead td.wday {
  background: silver;
  color: #FFFFFF;
  font-family: sans-serif;
  font-size: 0.75em;
  font-weight: 700;
}
table.dscalendar-table thead td.wday.wda-6 {
    background: darksalmon;
}

.month-btn {
  border: 1px solid #ccc;
  display: inline-block;
  height: 12px;
  width: 12px;
  cursor: pointer;
}

.prev-month.month-btn {
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAICAYAAADeM14FAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABKAAAASgB+3Je1gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAABVSURBVAiZY2BAAjkhIQ2MyBwGBgYrRmQOKyOjPyMyp3/16u9M/xkYvjP8/8/OzMHBxMDAwMDIwMDAkB0SUs74/78XBxeXF4ahzDCBU9euHTDT0lIGALIJGIs0O44OAAAAAElFTkSuQmCC") no-repeat 50% 50% white;
    left: 5px;
    position: absolute;
    top: calc(50% - 7px);
}
.next-month.month-btn {
    background:   url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAICAYAAADeM14FAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABKAAAASgB+3Je1gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAABtSURBVAiZTY3BCYNAFAXnL4IEtxqxCQ+e1C70kA7cmwVsGy6YGmIHaUVyEHw5RZzjMDCMbTtzw8msHLpuuoTtewNU/9IAxrrOVRSLSR8HkHnvkHJJX3v2/eM4zxfSO6YU3CGtmG0xpQDA/QDwA/8gJpwz8+WLAAAAAElFTkSuQmCC') no-repeat 50% 50% white;    
    right: 5px;
    position: absolute;
    top: calc(50% - 7px);
}




/*  --------------------------------------------------
  Forms Styles
  -------------------------------------------------- */
  
  
  
.hideclosebtn .close-dspopup-modal.dsclose-button {
    
}
.close-dspopup-modal.dsclose-button {
}
.dscallme.dspopup-modal {
    background: white none repeat scroll 0 0;
    padding-top: 83px;
    width: 360px;
}
.dscallme .form-head {
    font-family: open-sans,sans-serif;
    font-size: 32px;
    font-weight: 300;
    position: absolute;
    text-align: center;
    top: -48px;
    width: 288px;
}
.dscallme #field-id806641, .dscallme #field-id386375{
    border: 1px solid #999;
    border-radius: 2px;
    padding: 10px 10px 10px 40px;
    width: 246px;
}
.dscallme #field-id806641 {
    background: white url("/images/person.png") no-repeat scroll 14px 50%;
}
.dscallme #field-id386375 {
    background: white url("/images/phone.png") no-repeat scroll 14px 50%;
}
.dscallme .buttonform input {
    background: #f3be2f none repeat scroll 0 0;
    display: block;
    font-family: open-sans,sans-serif;
    font-weight: 300;
    margin-top: 28px;
    padding: 12px;
    width: 100%;
	cursor: pointer;
}
.dscallme .buttonform input["type="submit""]:hover{
	background-color: #c41f74;
}
.dscallme {
    font-size: 17px;
}
.dspopup-modal #form-dscallme {
    background: #f0f0f0 none repeat scroll 0 0;
    padding: 14px 32px;
    position: relative;
}
  .dscallme form > div[class^="field"] {
  margin: 19px 0;
}
  
  .ds-form.dspopup-modal.dssignup {
width: 850px;
background: white;
}
  
#form-dssignup {
    font-size: 14px;
    position: relative;
      width: 100%;
  height: 300px;
  background: #f0f0f0;
  text-align: left;
}
form#form-dssignup > div[class^="field"] {
    position: absolute;
}

#form-dssignup .field-0 {
    top: 20px;
}
#form-dssignup .field-1 {
    top: 60px;
}
#form-dssignup .field-2 {
    top: 100px;
}
#form-dssignup .field-3 {
    top: 140px;
}


#form-dssignup .field-0,
#form-dssignup .field-1,
#form-dssignup .field-2,
#form-dssignup .field-3 {
    left: 40px;
}



#form-dssignup .field-4,
#form-dssignup .field-5,
#form-dssignup .field-6,
#form-dssignup .field-7{
        left: 350px;
}

#form-dssignup .field-4 {

    top: 20px;
}




/* #form-dssignup .field-5 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 45px;
} */
#form-dssignup .field-6 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 70px;
}
#form-dssignup .field-7 {
  top: 95px;
  background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 50% 50%;
  padding: 15px 0;
}



#form-dssignup .field-8 {
    left: 350px;
}
#form-dssignup .field-9 {
    left: 380px;
}
#form-dssignup .field-10 {
    left: 410px;
}
#form-dssignup .field-11 {
    left: 440px;
}
#form-dssignup .field-12 {
    left: 470px;
}
#form-dssignup .field-13 {
    left: 500px;
}
#form-dssignup .field-14 {
    left: 530px;
}

#form-dssignup .field-8,
#form-dssignup .field-9,
#form-dssignup .field-10,
#form-dssignup .field-11,
#form-dssignup .field-12,
#form-dssignup .field-13,
#form-dssignup .field-14 {
    top: 150px;
}





#form-dssignup .field-15 {
    top: 20px;
}
#form-dssignup .field-16 {
    top: 80px;
}
#form-dssignup .field-17 {
    top: 140px;
}
#form-dssignup .field-18 {
    top: 210px;
}

#form-dssignup .field-15,
#form-dssignup .field-16,
#form-dssignup .field-17,
#form-dssignup .field-18 {
    left: 620px;
}
#form-dssignup .field-15 label,
#form-dssignup .field-16 label,
#form-dssignup .field-17 label,
#form-dssignup .field-18 label{
display: block;
margin-bottom: 5px;
}



#form-dssignup .field-1, #form-dssignup .field-2, #form-dssignup .field-3 {
    width: 250px;
}
#form-dssignup .field-1 label, #form-dssignup .field-2 label, #form-dssignup .field-3 label {
    width: auto;
}
#form-dssignup input[type="radio"] {
    float: left;
    /*margin-right: 10px;
    vertical-align: middle;*/
	    border: none;
    width: 0;
    height: 0;
    position: relative;
    top: 2px;
}
#form-dssignup input[type="radio"]:before{
	content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignup input[type="radio"]:checked:before{
	content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignup input[type="checkbox"]{
	    height: 0;
}
#form-dssignup input[type="checkbox"]:before{
	content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignup input[type="checkbox"]:checked:before{
	content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignup .field-8 > label, #form-dssignup .field-9 > label, #form-dssignup .field-9 > label, #form-dssignup .field-10 > label, #form-dssignup .field-11 > label, #form-dssignup .field-12 > label, #form-dssignup .field-13 > label, #form-dssignup .field-14 > label {
    display: table;
    width: auto;
}
#form-dssignup input[type="text"] {
  border: 1px solid #777;
  padding: 5px;
  width: 180px;
}
  
 /* #form-dssignup input[type="submit"] {
  background: #C30203;
  color: white;
  width: 190px;
  height: 40px;
}
*/


#form-dssignup .field-19 {
  margin-top: 259px;
margin-left: 336px;
}




/* ДЛЯ ЗАПИСАТЬСЯ НА КУРС */

#form-dssignup{
    background-color: transparent;
  
}

  .form-head-mine{
    color: #c41f74;
    font-family: Roboto;
font-size: 23px;
font-weight: 700;
text-transform: uppercase;
    letter-spacing: -1px;
}

 .ds-form.dspopup-modal.dssignup{
     padding: 37px 9px 50px 8px;
         border: 1px #aa1b65 solid;
 }


 #form-dssignup .field-0, #form-dssignup .field-1, #form-dssignup .field-2, #form-dssignup .field-3{
  left: 24px;
 }

.field-20.buttonform{

    margin: 30% 10% 10% 33%;
}

.field-20 input[type="submit"]{
      width: 300px;
height: 40px;
background-color: #aa1b65;
border: none;
color: white;
}

#form-dssignup .field-0{
  top: -19px;
    margin-left: 36%;
}

 #form-dssignup .field-1{
       margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
        top: 53px;
}

 #form-dssignup .field-5{
     margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
        top: 53px;
}

#form-dssignup .field-2{
  top: 86px;
}

#form-dssignup .field-3{
  top: 126px;
}


#form-dssignup .field-4{
 top: 166px;
    left: 24px;
}

#form-dssignup .field-4 label{
  width: 226px;
}

#form-dssignup .field-5, #form-dssignup .field-6, #form-dssignup .field-7, #form-dssignup .field-8{
  left: 308px;
}


#form-dssignup .field-6 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 62px;
}
#form-dssignup .field-7 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 89px;
}
#form-dssignup .field-1 label, #form-dssignup .field-2 label, #form-dssignup .field-3 label, #form-dssignup .field-4 label, #form-dssignup .field-5 label, #form-dssignup .field-6 label, #form-dssignup .field-7 label{
	margin-left: 20px;
}
#form-dssignup .field-8 {
  top: 115px;
  background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 78% 87%;
  padding: 15px 0;
      width: 123px;
}


#form-dssignup .field-8 label{
  position: absolute;
  left: 28px;
}

#form-dssignup .field-9, #form-dssignup .field-10, #form-dssignup .field-11, #form-dssignup .field-12, #form-dssignup .field-13, #form-dssignup .field-14, #form-dssignup .field-15{
  top: 165px;
}

#form-dssignup .field-9{
  left: 308px;
}

#form-dssignup .field-10{
  left: 332px;
}

#form-dssignup .field-11{
  left: 359px;
}

#form-dssignup .field-12{
  left: 383px;
}

#form-dssignup .field-13{
  left: 408px;
}

#form-dssignup .field-14{
  left: 432px;
}

#form-dssignup .field-15{
  left: 459px;
}

#form-dssignup .field-15 label{
  margin-bottom: 0px;
}

#form-dssignup .field-16, #form-dssignup .field-17, #form-dssignup .field-18{
 left: 568px;
}

#form-dssignup .field-16 label, #form-dssignup .field-17 label, #form-dssignup .field-18 label{
display: none;
}


#form-dssignup .field-16 input, #form-dssignup .field-17 input, #form-dssignup .field-18 input{
width: 229px;
    height: 28px;
border: 1px solid #a2988a;
    padding: 5px 14px;
color: #a2988a;
font-family: "Open Sans";
font-size: 14px;
font-weight: 400;
}

#form-dssignup .field-16{
  top: 45px;
}

#form-dssignup .field-17{
  top: 106px;
}

#form-dssignup .field-18{
  top: 169px;
}

.dssignup .close-dspopup-modal, .dssignup .dsclose-button{
  background: url(images/krest.png) no-repeat;
      top: 11px;
    right: 14px;
    width: 10px;
    height: 10px;
}


/* ДЛЯ ЗАКАЗАТЬ ЗВОНОК */


.dspopup-modal #form-dscallme{
 padding: 10px 32px 16px 27px;
  background: transparent; 
}

.dscallme.dspopup-modal{
      padding: 0 0 0 0;
   border: 1px #aa1b65 solid;
}

.dscallme .form-head-mine{
  font-size: 21px;
  text-align: center;
  line-height: 27px;
}

.dscallme #field-id806641, .dscallme #field-id386375{
     background: none;
    border-radius: 0px;
    color: #a2988a;
    font-family: "Open Sans";
    font-size: 14px;
    font-weight: 400;
    padding: 9px 14px;
    width: 271px;
}

.dscallme #field-id806641{
margin-top: 8px;
margin-bottom: 3px;

}

.dscallme .buttonform input{
  background-color: #c41f74;
  border:none;
      margin-top: 25px;
      color: white;
font-size: 12px;
}

.dscallme .close-dspopup-modal, .dscallme .dsclose-button{
  background: url(images/krest.png) no-repeat;
      top: 11px;
    right: 9px;
    width: 10px;
    height: 10px;
	    z-index: 9;
}

/**/

.dspopup-modal #form-dsfree_les{
 padding: 10px 32px 16px 27px;
  background: transparent; 
}

.dsfree_les.dspopup-modal{
	padding: 0 0 0 0;
	border: 1px #aa1b65 solid;
	width: 360px;
	background: #fff;
}

.dsfree_les .form-head-mine{
  font-size: 21px;
  text-align: center;
  line-height: 27px;
}

.dsfree_les #widgetu30203_input, .dsfree_les #widgetu30208_input{
	background: none;
    border-radius: 0px;
    color: #a2988a;
    font-family: "Open Sans";
    font-size: 14px;
    font-weight: 400;
    padding: 9px 14px;
    width: 271px;
	border: 1px solid #999;
}

.dsfree_les #widgetu30203_input{
margin-top: 8px;
margin-bottom: 3px;

}

.dsfree_les .buttonform input{
    background-color: #c41f74;
    border: none;
    margin-top: 25px;
    color: white;
    font-size: 12px;
    cursor: pointer;
    width: 100%;
    padding: 12px;
}

.dsfree_les .buttonform input:hover, .dscallme .buttonform input:hover, .field-20 input[type="submit"]:hover{
	    background-color: #C71467;
		cursor: pointer;
}

.dsfree_les .close-dspopup-modal, .dsfree_les .dsclose-button{
  background: url(images/krest.png) no-repeat;
      top: 11px;
    right: 9px;
    width: 10px;
    height: 10px;
}
/**/

.dstest .close-dspopup-modal, .dsfree_les .dsclose-button{
  background: url(images/krest.png) no-repeat;
      top: 11px;
    right: 9px;
    width: 10px;
    height: 10px;
}
.dspopup-modal #form-dstest{
 padding: 10px 32px 16px 27px;
  background: transparent; 
}

.dstest.dspopup-modal{
	padding: 0 0 0 0;
	border: 1px #aa1b65 solid;
	width: 360px;
	background: #fff;
}

.dstest .form-head-mine{
  font-size: 21px;
  text-align: center;
  line-height: 27px;
}

.dstest #widgetu22063_input, .dstest #widgetu22068_input{
	background: none;
    border-radius: 0px;
    color: #a2988a;
    font-family: "Open Sans";
    font-size: 14px;
    font-weight: 400;
    padding: 9px 14px;
    width: 271px;
	border: 1px solid #999;
}

.dstest #widgetu22063_input{
margin-top: 8px;
margin-bottom: 3px;

}

.dstest .buttonform input{
    background-color: #c41f74;
    border: none;
    margin-top: 25px;
    color: white;
    font-size: 12px;
    cursor: pointer;
    width: 100%;
    padding: 12px;
}

.dstest .buttonform input:hover{
	    background-color: #C71467;
		cursor: pointer;
}
/**/

.dslager .close-dspopup-modal, .dsfree_les .dsclose-button{
  background: url(images/krest.png) no-repeat;
      top: 11px;
    right: 9px;
    width: 10px;
    height: 10px;
}
.dspopup-modal #form-dslager{
 padding: 10px 32px 16px 27px;
  background: transparent; 
}

.dslager.dspopup-modal{
	padding: 0 0 0 0;
	border: 1px #aa1b65 solid;
	width: 360px;
	background: #fff;
}

.dslager .form-head-mine{
  font-size: 21px;
  text-align: center;
  line-height: 27px;
}

.dslager #widgetu31347_input, .dslager #widgetu31343_input{
	background: none;
    border-radius: 0px;
    color: #a2988a;
    font-family: "Open Sans";
    font-size: 14px;
    font-weight: 400;
    padding: 9px 14px;
    width: 271px;
	border: 1px solid #999;
}

.dslager #widgetu31347_input{
margin-top: 8px;
margin-bottom: 3px;

}

.dslager .buttonform input{
    background-color: #c41f74;
    border: none;
    margin-top: 25px;
    color: white;
    font-size: 12px;
    cursor: pointer;
    width: 100%;
    padding: 12px;
}

.dslager .buttonform input:hover{
	    background-color: #C71467;
		cursor: pointer;
}

/**/
.zapis .close-dspopup-modal, .dsfree_les .dsclose-button{
  background: url(images/krest.png) no-repeat;
      top: 11px;
    right: 9px;
    width: 10px;
    height: 10px;
}
.dspopup-modal #form-zapis{
 padding: 10px 32px 16px 27px;
  background: transparent; 
}

.zapis.dspopup-modal{
	padding: 0 0 0 0;
	border: 1px #aa1b65 solid;
	width: 360px;
	background: #fff;
}

.zapis .form-head-mine{
  font-size: 21px;
  text-align: center;
  line-height: 27px;
}

.zapis #field-id623584, .zapis #widgetu31343_input, .zapis #field-id95754, .zapis #field-id269237, .zapis #field-id201387{
	background: none;
    border-radius: 0px;
    color: #a2988a;
    font-family: "Open Sans";
    font-size: 14px;
    font-weight: 400;
    padding: 9px 14px;
    width: 271px;
	border: 1px solid #999;
}

.zapis #field-id623584{
margin-top: 8px;
margin-bottom: 3px;

}

.zapis .buttonform input{
    background-color: #c41f74;
    border: none;
    margin-top: 25px;
    color: white;
    font-size: 12px;
    cursor: pointer;
    width: 100%;
    padding: 12px;
}

.zapis .buttonform input:hover{
	    background-color: #C71467;
		cursor: pointer;
}

.zapis .error_form{
	display: none;
}
/**/

.dsskidka.dspopup-modal {
    background: white none repeat scroll 0 0;
    padding-top: 83px;
    width: 360px;
}
.dsskidka .form-head {
    font-family: open-sans,sans-serif;
    font-size: 32px;
    font-weight: 300;
    position: absolute;
    text-align: center;
    top: -48px;
    width: 288px;
}
.dsskidka #field-id806641, .dsskidka #field-id386375{
    border: 1px solid #999;
    border-radius: 2px;
    padding: 10px 10px 10px 40px;
    width: 246px;
}
.dsskidka #field-id806641 {
    background: white url("/images/person.png") no-repeat scroll 14px 50%;
}
.dsskidka #field-id386375 {
    background: white url("/images/phone.png") no-repeat scroll 14px 50%;
}
.dsskidka .buttonform input {
    background: #f3be2f none repeat scroll 0 0;
    display: block;
    font-family: open-sans,sans-serif;
    font-weight: 300;
    margin-top: 28px;
    padding: 12px;
    width: 100%;
	cursor: pointer;
}
.dsskidka .buttonform input["type="submit""]:hover{
	background-color: #c41f74;
}
.dsskidka {
    font-size: 17px;
}
.dspopup-modal #form-dsskidka {
    background: #f0f0f0 none repeat scroll 0 0;
    padding: 14px 32px;
    position: relative;
}
  .dsskidka form > div[class^="field"] {
  margin: 19px 0;
}
  

.dspopup-modal #form-dsskidka{
 padding: 10px 32px 16px 27px;
  background: transparent; 
}

.dsskidka.dspopup-modal{
      padding: 0 0 0 0;
   border: 1px #aa1b65 solid;
}

.dsskidka .form-head-mine{
  font-size: 21px;
  text-align: center;
  line-height: 27px;
}

.dsskidka #field-id806641, .dsskidka #field-id386375{
     background: none;
    border-radius: 0px;
    color: #a2988a;
    font-family: "Open Sans";
    font-size: 14px;
    font-weight: 400;
    padding: 9px 14px;
    width: 271px;
}

.dsskidka #field-id806641{
margin-top: 8px;
margin-bottom: 3px;

}

.dsskidka .buttonform input{
  background-color: #c41f74;
  border:none;
      margin-top: 25px;
      color: white;
font-size: 12px;
}

.dsskidka .close-dspopup-modal, .dsskidka .dsclose-button{
  background: url(images/krest.png) no-repeat;
      top: 11px;
    right: 9px;
    width: 10px;
    height: 10px;
	    z-index: 9;
}

































  

#form-dssignuper {
    font-size: 14px;
    position: relative;
      width: 100%;
  height: 300px;
  background: #f0f0f0;
}
form#form-dssignuper > div[class^="field"] {
    position: absolute;
}
#form-dssignuper .field-0 {
    top: 20px;
}
#form-dssignuper .field-1 {
    top: 60px;
}
#form-dssignuper .field-2 {
    top: 100px;
}
#form-dssignuper .field-3 {
    top: 140px;
}


#form-dssignuper .field-0,
#form-dssignuper .field-1,
#form-dssignuper .field-2,
#form-dssignuper .field-3 {
    left: 40px;
}



#form-dssignuper .field-4,
#form-dssignuper .field-5,
#form-dssignuper .field-6,
#form-dssignuper .field-7{
        left: 350px;
}

#form-dssignuper .field-4 {

    top: 20px;
}




/* #form-dssignuper .field-5 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 45px;
} */
#form-dssignuper .field-6 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 70px;
}
#form-dssignuper .field-7 {
  top: 95px;
  background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 50% 50%;
  padding: 15px 0;
}



#form-dssignuper .field-8 {
    left: 350px;
}
#form-dssignuper .field-9 {
    left: 380px;
}
#form-dssignuper .field-10 {
    left: 410px;
}
#form-dssignuper .field-11 {
    left: 440px;
}
#form-dssignuper .field-12 {
    left: 470px;
}
#form-dssignuper .field-13 {
    left: 500px;
}
#form-dssignuper .field-14 {
    left: 530px;
}

#form-dssignuper .field-8,
#form-dssignuper .field-9,
#form-dssignuper .field-10,
#form-dssignuper .field-11,
#form-dssignuper .field-12,
#form-dssignuper .field-13,
#form-dssignuper .field-14 {
    top: 150px;
}





#form-dssignuper .field-15 {
    top: 20px;
}
#form-dssignuper .field-16 {
    top: 80px;
}
#form-dssignuper .field-17 {
    top: 140px;
}
#form-dssignuper .field-18 {
    top: 210px;
}

#form-dssignuper .field-15,
#form-dssignuper .field-16,
#form-dssignuper .field-17,
#form-dssignuper .field-18 {
    left: 620px;
}
#form-dssignuper .field-15 label,
#form-dssignuper .field-16 label,
#form-dssignuper .field-17 label,
#form-dssignuper .field-18 label{
display: block;
margin-bottom: 5px;
}



#form-dssignuper .field-1, #form-dssignuper .field-2, #form-dssignuper .field-3 {
    width: 250px;
}
#form-dssignuper .field-1 label, #form-dssignuper .field-2 label, #form-dssignuper .field-3 label {
    width: auto;
}
#form-dssignuper input[type="radio"] {
    float: left;
    /*margin-right: 10px;
    vertical-align: middle;*/
      border: none;
    width: 0;
    height: 0;
    position: relative;
    top: 2px;
}
#form-dssignuper input[type="radio"]:before{
  content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignuper input[type="radio"]:checked:before{
  content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignuper input[type="checkbox"]{
      height: 0;
}
#form-dssignuper input[type="checkbox"]:before{
  content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignuper input[type="checkbox"]:checked:before{
  content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignuper .field-8 > label, #form-dssignuper .field-9 > label, #form-dssignuper .field-9 > label, #form-dssignuper .field-10 > label, #form-dssignuper .field-11 > label, #form-dssignuper .field-12 > label, #form-dssignuper .field-13 > label, #form-dssignuper .field-14 > label {
    display: table;
    width: auto;
}
#form-dssignuper input[type="text"] {
  border: 1px solid #777;
  padding: 5px;
  width: 180px;
}
  
 /* #form-dssignuper input[type="submit"] {
  background: #C30203;
  color: white;
  width: 190px;
  height: 40px;
}
*/


#form-dssignuper .field-19 {
  margin-top: 259px;
margin-left: 336px;
}




/* ДЛЯ ЗАПИСАТЬСЯ НА КУРС */

#form-dssignuper{
    background-color: transparent;
  
}

  .form-head-mine{
    color: #c41f74;
    font-family: Roboto;
font-size: 23px;
font-weight: 700;
text-transform: uppercase;
    letter-spacing: -1px;
}

 .ds-form.dspopup-modal.dssignup{
     padding: 37px 9px 50px 8px;
         border: 1px #aa1b65 solid;
 }


 #form-dssignuper .field-0, #form-dssignuper .field-1, #form-dssignuper .field-2, #form-dssignuper .field-3{
  left: 24px;
 }

.field-20.buttonform{

    margin: 30% 10% 10% 33%;
}

.field-20 input[type="submit"]{
      width: 300px;
height: 40px;
background-color: #aa1b65;
border: none;
color: white;
}

#form-dssignuper .field-0{
  top: -19px;
    margin-left: 36%;
}

 #form-dssignuper .field-1{
       margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
        top: 53px;
}

 #form-dssignuper .field-5{
     margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
        top: 53px;
}

#form-dssignuper .field-2{
  top: 86px;
}

#form-dssignuper .field-3{
  top: 126px;
}


#form-dssignuper .field-4{
 top: 166px;
    left: 24px;
}

#form-dssignuper .field-4 label{
  width: 226px;
}

#form-dssignuper .field-5, #form-dssignuper .field-6, #form-dssignuper .field-7, #form-dssignuper .field-8{
  left: 308px;
}


#form-dssignuper .field-6 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 62px;
}
#form-dssignuper .field-7 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 89px;
}
#form-dssignuper .field-1 label, #form-dssignuper .field-2 label, #form-dssignuper .field-3 label, #form-dssignuper .field-4 label, #form-dssignuper .field-5 label, #form-dssignuper .field-6 label, #form-dssignuper .field-7 label{
  margin-left: 20px;
}
#form-dssignuper .field-8 {
  top: 115px;
  background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 78% 87%;
  padding: 15px 0;
      width: 123px;
}


#form-dssignuper .field-8 label{
  position: absolute;
  left: 28px;
}

#form-dssignuper .field-9, #form-dssignuper .field-10, #form-dssignuper .field-11, #form-dssignuper .field-12, #form-dssignuper .field-13, #form-dssignuper .field-14, #form-dssignuper .field-15{
  top: 165px;
}

#form-dssignuper .field-9{
  left: 308px;
}

#form-dssignuper .field-10{
  left: 332px;
}

#form-dssignuper .field-11{
  left: 359px;
}

#form-dssignuper .field-12{
  left: 383px;
}

#form-dssignuper .field-13{
  left: 408px;
}

#form-dssignuper .field-14{
  left: 432px;
}

#form-dssignuper .field-15{
  left: 459px;
}

#form-dssignuper .field-15 label{
  margin-bottom: 0px;
}

#form-dssignuper .field-16, #form-dssignuper .field-17, #form-dssignuper .field-18{
 left: 568px;
}

#form-dssignuper .field-16 label, #form-dssignuper .field-17 label, #form-dssignuper .field-18 label{
display: none;
}


#form-dssignuper .field-16 input, #form-dssignuper .field-17 input, #form-dssignuper .field-18 input{
width: 229px;
    height: 28px;
border: 1px solid #a2988a;
    padding: 5px 14px;
color: #a2988a;
font-family: "Open Sans";
font-size: 14px;
font-weight: 400;
}

#form-dssignuper .field-16{
  top: 45px;
}

#form-dssignuper .field-17{
  top: 106px;
}

#form-dssignuper .field-18{
  top: 169px;
}
#dssignuper{
	height: 357px;
  min-height: 357px;
  text-align: left;
}
























#form-dssignuper2 {
    font-size: 14px;
    position: relative;
      width: 100%;
  height: 300px;
  background: #f0f0f0;
}
form#form-dssignuper2 > div[class^="field"] {
    position: absolute;
}
#form-dssignuper2 .field-0 {
    top: 20px;
}
#form-dssignuper2 .field-1 {
    top: 60px;
}
#form-dssignuper2 .field-2 {
    top: 100px;
}
#form-dssignuper2 .field-3 {
    top: 140px;
}


#form-dssignuper2 .field-0,
#form-dssignuper2 .field-1,
#form-dssignuper2 .field-2,
#form-dssignuper2 .field-3 {
    left: 40px;
}



#form-dssignuper2 .field-4,
#form-dssignuper2 .field-5,
#form-dssignuper2 .field-6,
#form-dssignuper2 .field-7{
        left: 350px;
}

#form-dssignuper2 .field-4 {

    top: 20px;
}




/* #form-dssignuper2 .field-5 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 45px;
} */
#form-dssignuper2 .field-6 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 70px;
}
#form-dssignuper2 .field-7 {
  top: 95px;
  background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 50% 50%;
  padding: 15px 0;
}



#form-dssignuper2 .field-8 {
    left: 350px;
}
#form-dssignuper2 .field-9 {
    left: 380px;
}
#form-dssignuper2 .field-10 {
    left: 410px;
}
#form-dssignuper2 .field-11 {
    left: 440px;
}
#form-dssignuper2 .field-12 {
    left: 470px;
}
#form-dssignuper2 .field-13 {
    left: 500px;
}
#form-dssignuper2 .field-14 {
    left: 530px;
}

#form-dssignuper2 .field-8,
#form-dssignuper2 .field-9,
#form-dssignuper2 .field-10,
#form-dssignuper2 .field-11,
#form-dssignuper2 .field-12,
#form-dssignuper2 .field-13,
#form-dssignuper2 .field-14 {
    top: 150px;
}





#form-dssignuper2 .field-15 {
    top: 20px;
}
#form-dssignuper2 .field-16 {
    top: 80px;
}
#form-dssignuper2 .field-17 {
    top: 140px;
}
#form-dssignuper2 .field-18 {
    top: 210px;
}

#form-dssignuper2 .field-15,
#form-dssignuper2 .field-16,
#form-dssignuper2 .field-17,
#form-dssignuper2 .field-18 {
    left: 620px;
}
#form-dssignuper2 .field-15 label,
#form-dssignuper2 .field-16 label,
#form-dssignuper2 .field-17 label,
#form-dssignuper2 .field-18 label{
display: block;
margin-bottom: 5px;
}



#form-dssignuper2 .field-1, #form-dssignuper2 .field-2, #form-dssignuper2 .field-3 {
    width: 250px;
}
#form-dssignuper2 .field-1 label, #form-dssignuper2 .field-2 label, #form-dssignuper2 .field-3 label {
    width: auto;
}
#form-dssignuper2 input[type="radio"] {
    float: left;
    /*margin-right: 10px;
    vertical-align: middle;*/
      border: none;
    width: 0;
    height: 0;
    position: relative;
    top: 2px;
}
#form-dssignuper2 input[type="radio"]:before{
  content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignuper2 input[type="radio"]:checked:before{
  content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignuper2 input[type="checkbox"]{
      height: 0;
}
#form-dssignuper2 input[type="checkbox"]:before{
  content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignuper2 input[type="checkbox"]:checked:before{
  content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignuper2 .field-8 > label, #form-dssignuper2 .field-9 > label, #form-dssignuper2 .field-9 > label, #form-dssignuper2 .field-10 > label, #form-dssignuper2 .field-11 > label, #form-dssignuper2 .field-12 > label, #form-dssignuper2 .field-13 > label, #form-dssignuper2 .field-14 > label {
    display: table;
    width: auto;
    margin-bottom: -12px;
}
#form-dssignuper2 input[type="text"] {
  border: 1px solid #777;
  padding: 5px;
  width: 180px;
}
  
 /* #form-dssignuper2 input[type="submit"] {
  background: #C30203;
  color: white;
  width: 190px;
  height: 40px;
}
*/


#form-dssignuper2 .field-19 {
  margin-top: 259px;
margin-left: 336px;
}




/* ДЛЯ ЗАПИСАТЬСЯ НА КУРС */

#form-dssignuper2{
    background-color: transparent;
  
}

  .form-head-mine{
    color: #c41f74;
    font-family: Roboto;
font-size: 23px;
font-weight: 700;
text-transform: uppercase;
    letter-spacing: -1px;
}

 .ds-form.dspopup-modal.dssignup{
     padding: 37px 9px 50px 8px;
         border: 1px #aa1b65 solid;
 }


 #form-dssignuper2 .field-0, #form-dssignuper2 .field-1, #form-dssignuper2 .field-2, #form-dssignuper2 .field-3{
  left: 24px;
 }

.field-20.buttonform{

    margin: 30% 10% 10% 33%;
}

.field-20 input[type="submit"] {
    width: 300px;
    height: 40px;
    background-color: #aa1b65;
    border: none;
    color: white;
    /* top: 10px; */
    margin-top: -12px;
    margin-left: 22px;
}

#form-dssignuper2 .field-0 {
    top: 15px;
    margin-left: 36%;
}

#form-dssignuper2 .field-1 {
    margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    top: 88px;
}

 #form-dssignuper2 .field-5 {
    margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    top: 88px;
}

#form-dssignuper2 .field-2 {
    top: 121px;
}

#form-dssignuper2 .field-3 {
    top: 161px;
}


#form-dssignuper2 .field-4 {
    top: 202px;
    left: 24px;
}

#form-dssignuper2 .field-4 label{
  width: 226px;
}

#form-dssignuper2 .field-5, #form-dssignuper2 .field-6, #form-dssignuper2 .field-7, #form-dssignuper2 .field-8{
  left: 308px;
}


#form-dssignuper2 .field-6 {
    background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
    padding: 15px 0;
    top: 98px;
}
#form-dssignuper2 .field-7 {
    padding: 15px 0;
    top: 125px;
    background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
}
#form-dssignuper2 .field-1 label, #form-dssignuper2 .field-2 label, #form-dssignuper2 .field-3 label, #form-dssignuper2 .field-4 label, #form-dssignuper2 .field-5 label, #form-dssignuper2 .field-6 label, #form-dssignuper2 .field-7 label {
    margin-left: 31px;
}
#form-dssignuper2 .field-8 {
    top: 151px;
         background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 78% 87%;

    padding: 15px 0;
    width: 123px;
}


#form-dssignuper2 .field-8 label{
  position: absolute;
  left: 28px;
}

#form-dssignuper2 .field-9, #form-dssignuper2 .field-10, #form-dssignuper2 .field-11, #form-dssignuper2 .field-12, #form-dssignuper2 .field-13, #form-dssignuper2 .field-14, #form-dssignuper2 .field-15 {
    top: 200px;
}

#form-dssignuper2 .field-9{
  left: 308px;
}

#form-dssignuper2 .field-10{
  left: 332px;
}

#form-dssignuper2 .field-11{
  left: 359px;
}

#form-dssignuper2 .field-12{
  left: 383px;
}

#form-dssignuper2 .field-13{
  left: 408px;
}

#form-dssignuper2 .field-14{
  left: 432px;
}

#form-dssignuper2 .field-15{
  left: 459px;
}

#form-dssignuper2 .field-15 label {
    margin-bottom: -12px;
}

#form-dssignuper2 .field-16, #form-dssignuper2 .field-17, #form-dssignuper2 .field-18{
 left: 568px;
}

#form-dssignuper2 .field-16 label, #form-dssignuper2 .field-17 label, #form-dssignuper2 .field-18 label{
display: none;
}


#form-dssignuper2 .field-16 input, #form-dssignuper2 .field-17 input, #form-dssignuper2 .field-18 input{
width: 229px;
    height: 28px;
border: 1px solid #a2988a;
    padding: 5px 14px;
color: #a2988a;
font-family: "Open Sans";
font-size: 14px;
font-weight: 400;
}

#form-dssignuper2 .field-16 {
    top: 80px;
}

#form-dssignuper2 .field-17 {
    top: 141px;
}

#form-dssignuper2 .field-18 {
    top: 204px;
}

#dssignuper2 {
    height: 368px;
    /* min-height: 357px; */
    text-align: left;
}







































  
#form-dssignup_mod {
    font-size: 14px;
    position: relative;
      width: 100%;
  height: 260px;
  background: #f0f0f0;
  text-align: left;
}
form#form-dssignup_mod > div[class^="field"] {
    position: absolute;
}

#form-dssignup_mod .field-0 {
    top: 20px;
}
#form-dssignup_mod .field-1 {
    top: 60px;
}
#form-dssignup_mod .field-2 {
    top: 100px;
}
#form-dssignup_mod .field-3 {
    top: 140px;
}


#form-dssignup_mod .field-0,
#form-dssignup_mod .field-1,
#form-dssignup_mod .field-2,
#form-dssignup_mod .field-3 {
    left: 40px;
}



#form-dssignup_mod .field-4,
#form-dssignup_mod .field-5,
#form-dssignup_mod .field-6,
#form-dssignup_mod .field-7{
        left: 350px;
}

#form-dssignup_mod .field-4 {

    top: 20px;
}




/* #form-dssignup_mod .field-5 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 45px;
} */
#form-dssignup_mod .field-6 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 70px;
}
#form-dssignup_mod .field-7 {
  top: 95px;
  background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 50% 50%;
  padding: 15px 0;
}



#form-dssignup_mod .field-8 {
    left: 350px;
}
#form-dssignup_mod .field-9 {
    left: 380px;
}
#form-dssignup_mod .field-10 {
    left: 410px;
}
#form-dssignup_mod .field-11 {
    left: 440px;
}
#form-dssignup_mod .field-12 {
    left: 470px;
}
#form-dssignup_mod .field-13 {
    left: 500px;
}
#form-dssignup_mod .field-14 {
    left: 530px;
}

#form-dssignup_mod .field-8,
#form-dssignup_mod .field-9,
#form-dssignup_mod .field-10,
#form-dssignup_mod .field-11,
#form-dssignup_mod .field-12,
#form-dssignup_mod .field-13,
#form-dssignup_mod .field-14 {
    top: 150px;
}





#form-dssignup_mod .field-15 {
    top: 20px;
}
#form-dssignup_mod .field-16 {
    top: 80px;
}
#form-dssignup_mod .field-17 {
    top: 140px;
}
#form-dssignup_mod .field-18 {
    top: 210px;
}

#form-dssignup_mod .field-15,
#form-dssignup_mod .field-16,
#form-dssignup_mod .field-17,
#form-dssignup_mod .field-18 {
    left: 620px;
}
#form-dssignup_mod .field-15 label,
#form-dssignup_mod .field-16 label,
#form-dssignup_mod .field-17 label,
#form-dssignup_mod .field-18 label{
display: block;
margin-bottom: 5px;
}



#form-dssignup_mod .field-1, #form-dssignup_mod .field-2, #form-dssignup_mod .field-3 {
    width: 250px;
}
#form-dssignup_mod .field-1 label, #form-dssignup_mod .field-2 label, #form-dssignup_mod .field-3 label {
    width: auto;
}
#form-dssignup_mod input[type="radio"] {
    float: left;
    /*margin-right: 10px;
    vertical-align: middle;*/
	    border: none;
    width: 0;
    height: 0;
    position: relative;
    top: 2px;
}
#form-dssignup_mod input[type="radio"]:before{
	content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignup_mod input[type="radio"]:checked:before{
	content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignup_mod input[type="checkbox"]{
	    height: 0;
}
#form-dssignup_mod input[type="checkbox"]:before{
	content: url(/img/chekbox.png);
    position: absolute;
}
#form-dssignup_mod input[type="checkbox"]:checked:before{
	content: url(/img/chekbox_chek.png);
    position: absolute;
}
#form-dssignup_mod .field-8 > label, #form-dssignup_mod .field-9 > label, #form-dssignup_mod .field-9 > label, #form-dssignup_mod .field-10 > label, #form-dssignup_mod .field-11 > label, #form-dssignup_mod .field-12 > label, #form-dssignup_mod .field-13 > label, #form-dssignup_mod .field-14 > label {
    display: table;
    width: auto;
}
#form-dssignup_mod input[type="text"] {
  border: 1px solid #777;
  padding: 5px;
  width: 180px;
}
  
 /* #form-dssignup_mod input[type="submit"] {
  background: #C30203;
  color: white;
  width: 190px;
  height: 40px;
}
*/


#form-dssignup_mod .field-19 {
  margin-top: 259px;
margin-left: 336px;
}




/* ДЛЯ ЗАПИСАТЬСЯ НА КУРС */

#form-dssignup_mod{
    background-color: transparent;
  
}

  .form-head-mine{
    color: #c41f74;
    font-family: Roboto;
font-size: 23px;
font-weight: 700;
text-transform: uppercase;
    letter-spacing: -1px;
}

 .ds-form.dspopup-modal.dssignup-mod{
     padding: 37px 9px 50px 8px;
         border: 1px #aa1b65 solid;
 }


 #form-dssignup_mod .field-0, #form-dssignup_mod .field-1, #form-dssignup_mod .field-2, #form-dssignup_mod .field-3{
  left: 24px;
 }

.field-20.buttonform{

    margin: 30% 10% 10% 33%;
}

.field-20 input[type="submit"]{
      width: 300px;
height: 40px;
background-color: #aa1b65;
border: none;
color: white;
}

#form-dssignup_mod .field-0{
  top: -19px;
    margin-left: 36%;
}

 #form-dssignup_mod .field-1{
       margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
        top: 53px;
}

 #form-dssignup_mod .field-5{
     margin: 8px 0 0 0;
    padding: 0;
    color: #181919;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
        top: 53px;
}

#form-dssignup_mod .field-2{
  top: 86px;
}

#form-dssignup_mod .field-3{
  top: 126px;
}


#form-dssignup_mod .field-4{
 top: 166px;
    left: 24px;
}

#form-dssignup_mod .field-4 label{
  width: 226px;
}

#form-dssignup_mod .field-5, #form-dssignup_mod .field-6, #form-dssignup_mod .field-7, #form-dssignup_mod .field-8{
  left: 308px;
}


#form-dssignup_mod .field-6 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAPCAYAAAD6Ud/mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA5OThDMkQzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA5OThDMkUzMjI4MTFFNjg0NkY5NjFBMjNGNURCRTkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDk5OEMyQjMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDk5OEMyQzMyMjgxMUU2ODQ2Rjk2MUEyM0Y1REJFOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv1wBbkAAAIbSURBVHjajJRNaFNBEMfnJS95agNJMQbtBwRCyEXvreZm4sGLX4cePAQC5uxR8OhR6KGnGmpKrz15s5AIHmItVMFDIIQYQvUilUDapEhMXp//kWl5pLsvWfgxuzOzM/N25y05jkMqdMMwjB3wnacquy6eoQuKYDr9CcQV7PNxXFUi1fCRfqwg6JpC/w7sjyeB70uInDaa9lMN4zVwwDZNGPB5Lr4ftFfhdTdcJehhOiuqHNYbYN1dPdZHYBPTkO4DpmmCGbCIQF+l6rrA8y+wXQWJSSelTDTeCJLkFNM5l3qOdeDbNFcyTaJHXD1kTBEvJraHkxL5FBfbhPgL+R5yHvIe5AE4VCRi3QF87kNegyzyfvBp3NHUbA6C38BGNX+w0fJoOgs+3DB+Lkzu69KFD1B02n9c+ttcIdbL3W53z+0biUSWYPsM2x3Ydj1/AY9E17HMgJvgKVgAx+AyCICRnAjrPoI6qIEKkv7yTIQEixDPwANwi1WWZVEymaR4PE7RaJRCoRCZpkmj0Yj6/T51Oh1qt9vUbDZpMBiQvBg1eUE2kPTHeSIkuIH5K/khzXQ6TdlsljKZjJNKpVb9fv8ObL2zhpIHldt9KF92att2uNFo7FYqFSqXy1StVvlU2LYFXvCGJ+BtIBAI5/N5KhQKlEgkHkP3UwK35Njq8ja6ez8oTcA6W440Au62Wq03xWKRSqUSDYfDzj8BBgBtmln+2b+iKQAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 62px;
}
#form-dssignup_mod .field-7 {
  background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyRUI2MTYzMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyRUI2MTczMjI4MTFFNjhBRTZENTU2NjlGQTNFMzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJFQjYxNDMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJFQjYxNTMyMjgxMUU2OEFFNkQ1NTY2OUZBM0UzOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhIpbXwAAAFbSURBVHjapJQ9SwNBEIbvNHiCgoiYQEQbO39ByA+wkBRaCTYpDNb2AUFbO1EIIsYiVap02mhnpYKVFtqkVVBENCDo+gyMsMS9vRUXHmZ25p2d/cglijJGHMcncC9u9J/BIm9gshYasPxlCnYcmg5cgOlrUMdUXZ23pTO0A3a5rtrTNEEdXnHHNVRlfgANuzvzF2jijvoajsA0wivtequIf0luAmbTdtI/l0W+cItWuCgxuPad2Z4u6SvlHdK85hZ/vRqJO+wH9hg7hZ3HduHBsZDEumgWsJPYfamH85wmh+ARPo0xPRKJ5w4TNPIgg9JY72vYdbSybr/0k7PyJc2VQy+7pQUVK1zRl2uFfhUzclQKDrWwp4h/pMfw/n4ShLvwjj+msTmowZr6MgponmAj7Xht7boV8Ik0Vdtw5VdIbDqKzqDjiO9hVv/yN2L04r0jF7DWDTxnib4FGAAVKU5LdfzSzAAAAABJRU5ErkJggg==") no-repeat scroll 50% 50%;
  padding: 15px 0;
  top: 89px;
}
#form-dssignup_mod .field-1 label, #form-dssignup_mod .field-2 label, #form-dssignup_mod .field-3 label, #form-dssignup_mod .field-4 label, #form-dssignup_mod .field-5 label, #form-dssignup_mod .field-6 label, #form-dssignup_mod .field-7 label{
	margin-left: 20px;
}
#form-dssignup_mod .field-8 {
  top: 115px;
  background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTE5QzNCMjUzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTE5QzNCMjYzMjI4MTFFNjgzMENCODdCOEQ1MkQxRkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMTlDM0IyMzMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMTlDM0IyNDMyMjgxMUU2ODMwQ0I4N0I4RDUyRDFGQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmqxitoAAAD+SURBVHjaYmZAA4yMjH1AygOIrwDxZwYigRpQ40Mg/gFkKzKQAGSBmr4B8X8gW5gUjSCn3gBpBOIFpGoMg2oE4TBS9DIBcSqM8////1cE1HtALYTb/BLJ5nAcmpSAci1QNcuA2Bam+TuS5oU4NMsA5V7A1AH55jDNz5E0/wYKCeIImwogPoFiAZCzHUkzCB/FETZiSHxQdPaBNAegaQbhvegJBRRI0IASAdJvgXg6I1TiApDSR7PtDxAvBsbAISANClQRIG0HxClA/BcozgJTKA6UfIPFBVgxUL0KthA9SkDjeaA6DXwpLgKI1wHxbSB+BcT3gHgzECeiqwUIMACugVSLhowa7gAAAABJRU5ErkJggg==') no-repeat 78% 87%;
  padding: 15px 0;
      width: 123px;
}


#form-dssignup_mod .field-8 label{
  position: absolute;
  left: 28px;
}

#form-dssignup_mod .field-9, #form-dssignup_mod .field-10, #form-dssignup_mod .field-11, #form-dssignup_mod .field-12, #form-dssignup_mod .field-13, #form-dssignup_mod .field-14, #form-dssignup_mod .field-15{
  top: 165px;
}

#form-dssignup_mod .field-9{
  left: 308px;
}

#form-dssignup_mod .field-10{
  left: 332px;
}

#form-dssignup_mod .field-11{
  left: 359px;
}

#form-dssignup_mod .field-12{
  left: 383px;
}

#form-dssignup_mod .field-13{
  left: 408px;
}

#form-dssignup_mod .field-14{
  left: 432px;
}

#form-dssignup_mod .field-15{
  left: 459px;
}

#form-dssignup_mod .field-15 label{
  margin-bottom: 0px;
}

#form-dssignup_mod .field-16, #form-dssignup_mod .field-17, #form-dssignup_mod .field-18{
 left: 568px;
}

#form-dssignup_mod .field-16 label, #form-dssignup_mod .field-17 label, #form-dssignup_mod .field-18 label{
display: none;
}


#form-dssignup_mod .field-16 input, #form-dssignup_mod .field-17 input, #form-dssignup_mod .field-18 input{
width: 229px;
    height: 28px;
border: 1px solid #a2988a;
    padding: 5px 14px;
color: #a2988a;
font-family: "Open Sans";
font-size: 14px;
font-weight: 400;
}

#form-dssignup_mod .field-16{
  top: 45px;
}

#form-dssignup_mod .field-17{
  top: 106px;
}

#form-dssignup_mod .field-18{
  top: 169px;
}

.ds-form.dspopup-modal.dssignup_mod {
	width: 850px;
	background: white;
}
.ds-form.dspopup-modal.dssignup_mod{
     padding: 37px 9px 50px 8px;
     border: 1px #aa1b65 solid;
}
.dssignup_mod .close-dspopup-modal, .dssignup_mod .dsclose-button{
    background: url(images/krest.png) no-repeat;
    top: 11px;
    right: 14px;
    width: 10px;
    height: 10px;
}

.ds-form.dspopup-modal.dssignup_mod{
     padding: 37px 9px 50px 8px;
     border: 1px #aa1b65 solid;
}






