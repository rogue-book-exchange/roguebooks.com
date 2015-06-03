/* Author: Jules Rogmans  */
/* Version: 1.0 */
/* Date Created: @date */

"use strict";

function position_social_icons () {
  $('.social-icons').css({
    'top': $('.wide').height() - $('.social-icons').height() - 10,
  });
}

window.onload = function(event) {
  position_social_icons();
}

window.onresize = function () {
  position_social_icons();
};