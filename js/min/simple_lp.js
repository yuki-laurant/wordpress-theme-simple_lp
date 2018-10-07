/**
 * シンプルLPテーマ メインJavaScript
 *
 * 
 */
( function() {
  // 追随ボタン表示処理
  var fixbtn = document.getElementById('fix-btn');
  if(fixbtn) {
    // スクロールイベントを設定
    var frameId = null;
    window.onscroll = function() {
      // 表示間隔以上では処理しない
      cancelAnimationFrame(frameId);
      frameId = requestAnimationFrame(function() {
        if(
          window.scrollY > (document.body.clientHeight * 0.08)
       && window.scrollY < (document.body.clientHeight * 0.96 - window.innerHeight)
        ) {
          fixbtn.style.setProperty('visibility', 'visible');
          fixbtn.style.setProperty('opacity', '1');
        } else {
          fixbtn.style.setProperty('opacity', '0');
        }
      });
    };
    // 非表示時はアニメーション後にvisiblityをhiddenに変更する
    fixbtn.addEventListener('transitionend', function() {
      if(this.style.getPropertyValue('opacity') === '0') {
        this.style.setProperty('visibility', 'hidden');
      }
    });
    
  }
} )();
