document.addEventListener("touchstart", function() {}, true);
function validateEmail(input) {
  var re = new RegExp(
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
  return re.test(input);
}

function validateMobile(input) {
  var re = new RegExp("^09\\d{9}$");
  return re.test(input);
}
$(document).ready(function() {
  $(".button-collapse").sideNav({ edge: "right" });

  var t = $(document),
    o = $(".fixed-action-btn"),
    i = "hasScrolled";
  t.scroll(function() {
    t.scrollTop() >= 0 ? o.addClass(i) : o.removeClass(i);
  });

  $(".farzan-table input").change(function() {
    $(".farzan-table tr").removeClass("active-row");
    this.checked &&
      ($(".table-options li a,.table-options li button").removeClass(
        "disabled"
      ),
      $(this)
        .closest("tr")
        .addClass("active-row"));
  });
  $("#mybtn").hover(
    function() {
      $(this).addClass("pulse animated");
    },
    function() {
      $(this).removeClass("pulse animated");
    }
  );

  $(".tooltip").tooltipster({
    animation: "grow",
    delay: 50,
    theme: "tooltipster-default",
    touchDevices: !1,
    trigger: "hover",
    position: "bottom"
  });
  $(".tooltip-right").tooltipster({
    animation: "grow",
    delay: 50,
    theme: "tooltipster-default",
    touchDevices: !1,
    trigger: "hover",
    position: "right"
  });
  $(".tooltip-top").tooltipster({
    animation: "grow",
    delay: 50,
    theme: "tooltipster-default",
    touchDevices: !1,
    trigger: "hover",
    position: "top"
  });

  var e = $(window).height(),
    a = $(".hold-down"),
    n = $(a).height(),
    s = $(a).position().top + n;
  e > s && $(a).css("margin-top", 5 + (e - s) + "px");

  // left-comment
  $("#comment-btn").click(function(e) {
    e.stopPropagation();
    $(".comment-div").toggle("slide");
  });
  $("#close-btn").click(function() {
    $(".comment-div").hide("slide");
  });
  $("#send-btn").click(function() {
    $(".comment-div").hide("slide");
  });

  $("#search-trigger").click(function() {
    $("#search-input").toggleClass("search-input-open");
  });
  $(document).click(function(e) {
    if (!$(e.target).closest(".ngen-search-form").length) {
      $("#search-input").removeClass("search-input-open");
    }
  });

  // more buttons:
  $(".more-h-d-btn").click(function() {
    $("#more-health-dashboard").slideToggle(100);
    $(".more-h-d-btn i").toggleClass("mdi-content-remove");
  });
  $(".more-s-d-btn").click(function() {
    $("#more-system-dashboard").slideToggle(100);
    $(".more-s-d-btn i").toggleClass("mdi-content-remove");
  });
  $(".more-p-d-btn").click(function() {
    $("#more-plan-dashboard").slideToggle(100);
    // $(this).text("");
    $(".more-p-d-btn i").toggleClass("mdi-content-remove");
  });

  $(".with-sub2").click(function() {
    $(this).toggleClass("a_open");
    // $(this).find(".display-active").slideToggle();
    // $(this).hasClass(".display-active").slideToggle();
    $(this)
      .siblings("div.display-active")
      .slideToggle();
  });
});

(function($, undefined) {
  "use strict";

  // When ready.
  $(function() {
    var $input = $(".price");
    // var $input = $form.find( "input" );

    $input.on("keyup", function(event) {
      // When user select text in the document, also abort.
      var selection = window.getSelection().toString();
      if (selection !== "") {
        return;
      }

      // When the arrow keys are pressed, abort.
      if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
        return;
      }

      var $this = $(this);

      // Get the value.
      var input = $this.val();

      var input = input.replace(/[\D\s\._\-]+/g, "");
      input = input ? parseInt(input, 10) : 0;

      $this.val(function() {
        return input === 0 ? "" : input.toLocaleString("en-US");
      });
    });

    /**
     * ==================================
     * When Form Submitted
     * ==================================
     */
    $form.on("submit", function(event) {
      var $this = $(this);
      var arr = $this.serializeArray();

      for (var i = 0; i < arr.length; i++) {
        arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ""); // Sanitize the values.
      }

      // console.log(arr);

      event.preventDefault();
    });
  });
})(jQuery);

function getRandom(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min; //The maximum is inclusive and the minimum is inclusive
}

function removeParent(el, e) {
  e.preventDefault();
  e.stopPropagation();
  $(el)
    .parents(".classLabel")
    .remove();
}

$(".add-class").click(function() {
  $("#index-value").val(
    $(this)
      .parents("tr")
      .attr("data-index")
  );
  $("#classType").val($("#classType option:first").val());
  $("input[name='Gender-tick']#men").prop("checked", true);
  $("#hourFrom").val("");
  $("#hourTo").val("");
  $("#price-period").val("");
  $("#price-session").val("");
  $("#trainer").val("");
  $("#add-edit-type").val("add");

  $("#classType").material_select();
  Materialize.updateTextFields();

  $("#modal-add").openModal();
});

$(".add-class-btn").click(function(e) {
  e.preventDefault();
  var index = $("#index-value").val(),
    classType = $("#classType option:selected").val(),
    classTypeText = $("#classType option:selected").text(),
    Gender = $("input[name='Gender-tick']:checked").attr("id"),
    hourFrom = $("#hourFrom").val(),
    hourTo = $("#hourTo").val(),
    pricePeriod = $("#price-period").val(),
    priceSession = $("#price-session").val(),
    type = $("#add-edit-type").val(),
    trainer = $("#trainer").val();

  if (type == "add") {
    $("tbody")
      .find("tr[data-index='" + index + "'] td:nth-child(2)")
      .prepend(
        "<span class='classLabel' onClick='editClass($(this),event)' data-uniq='' data-trainer=" +
          trainer +
          " data-classTypeText=" +
          classTypeText +
          " data-index=" +
          index +
          " data-priceSession=" +
          priceSession +
          " data-pricePeriod=" +
          pricePeriod +
          " data-Gender=" +
          Gender +
          " data-hourFrom=" +
          hourFrom +
          " data-hourTo=" +
          hourTo +
          " data-classType=" +
          classType +
          ">" +
          "<b>" +
          classTypeText +
          "</b>" +
          " ( " +
          hourFrom +
          " - " +
          hourTo +
          " ) " +
          "<i class='mdi-navigation-close close-icon' onClick=removeParent($(this),event)></i>" +
          "</span>"
      );
    $("#modal-add input[type=text].valid").removeClass("valid");
  } else {
    var uniq = type.slice(5);
    $(".classLabel[data-uniq^='" + uniq + "']").replaceWith(
      "<span class='classLabel' onClick='editClass($(this),event)' data-uniq='' data-trainer=" +
        trainer +
        " data-classTypeText=" +
        classTypeText +
        " data-index=" +
        index +
        " data-priceSession=" +
        priceSession +
        " data-pricePeriod=" +
        pricePeriod +
        " data-Gender=" +
        Gender +
        " data-hourFrom=" +
        hourFrom +
        " data-hourTo=" +
        hourTo +
        " data-classType=" +
        classType +
        ">" +
        "<b>" +
        classTypeText +
        "</b>" +
        " از " +
        (hourFrom + " تا " + hourTo) +
        "<i class='mdi-navigation-close close-icon' onClick=removeParent($(this),event)></i>" +
        "</span>"
    );
    // console.log("edited");
  }
  $("#modal-add").closeModal();
});

function editClass(el, e) {
  e.preventDefault();
  e.stopPropagation();
  var random = getRandom(2000000, 4000000);
  $(el).attr("data-uniq", random);

  var index = $(el).attr("data-index"),
    classType = $(el).attr("data-classType"),
    // classTypeText = $(el).attr("data-classTypeText"),
    Gender = $(el).attr("data-Gender"),
    hourFrom = $(el).attr("data-hourFrom"),
    hourTo = $(el).attr("data-hourTo"),
    pricePeriod = $(el).attr("data-pricePeriod"),
    priceSession = $(el).attr("data-priceSession"),
    trainer = $(el).attr("data-trainer");
  $("#index-value").val(index);
  $("#add-edit-type").val("edit_" + random);
  $("#classType").val(classType);
  $("input[name='Gender-tick']#" + Gender).prop("checked", true);
  $("#hourFrom").val(hourFrom);
  $("#hourTo").val(hourTo);
  $("#price-period").val(pricePeriod);
  $("#price-session").val(priceSession);
  $("#trainer").val(trainer);

  $("#classType").material_select();
  Materialize.updateTextFields();

  $("#modal-add").openModal();

  // console.log($(el).attr("data-classType"));
  $("#modal-add").openModal();
}

function deleteFromGallery(el, e) {
  e.preventDefault();
  // $(el).closest('.owl-item').trigger('del.owl.carousel', $(this).index()).trigger('refresh.owl.carousel');
  // var indexToRemove = parseInt(
  //   $(el)
  //     .parents(".item")
  //     .attr("data-index")
  // );
  // console.log("deleted", indexToRemove);
  $(el)
    .parents(".owl-item")
    .remove()
    .trigger("refresh.owl.carousel");
}
