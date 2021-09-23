<style media="all" title="mystyles" type="text/css">
#facebox {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  text-align: left;
}


#facebox .popup{
  position:relative;
  border:3px solid rgba(0,0,0,0);
  -webkit-border-radius:5px;
  -moz-border-radius:5px;
  border-radius:5px;
  -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
  -moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
  box-shadow:0 0 18px rgba(0,0,0,0.4);
}

#facebox .content {
  display:table;
  width: 370px;
  padding: 10px;
  background: #fff;
  -webkit-border-radius:4px;
  -moz-border-radius:4px;
  border-radius:4px;
}

#facebox .content > p:first-child{
  margin-top:0;
}
#facebox .content > p:last-child{
  margin-bottom:0;
}

#facebox .close{
  position:absolute;
  top:5px;
  right:5px;
  padding:2px;
  background:#fff;
}
#facebox .close img{
  opacity:0.3;
}
#facebox .close:hover img{
  opacity:1.0;
}

#facebox .loading {
  text-align: center;
}

#facebox .image {
  text-align: center;
}

#facebox img {
  border: 0;
  margin: 0;
}

#facebox_overlay {
  position: fixed;
  top: 0px;
  left: 0px;
  height:100%;
  width:100%;
}

.facebox_hide {
  z-index:-100;
}

.facebox_overlayBG {
  background-color: #000;
  z-index: 99;
}
</style>