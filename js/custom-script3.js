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
  var index = $(this)
      .parents("tr")
      .attr("data-index"),
    color = $(this).css("backgroundColor");

  $("#index-bg").val(color);
  $("#classType").val(index);
  $("#classGender").val($("#classGender option:first").val());
  $("[id^=day]")
    .prop("checked", false)
    .prop("disabled", false);
  $("[id^=hourFrom]")
    .val("")
    .attr("disabled", true);
  $("[id^=hourTo]")
    .val("")
    .attr("disabled", true);
  $("#price-period").val("");
  $("#price-session").val("");
  $("#trainer").val("");
  $("#add-edit-type").val("add");

  $("#modal-add input").removeClass("valid");
  $("#classType").material_select();
  $("#classGender").material_select();
  Materialize.updateTextFields();

  $("#modal-add").openModal();
});

$(".add-class-btn").click(function(e) {
  e.preventDefault();
  var days = [],
    allDays = false,
    bg = $("#index-bg").val(),
    classType = $("#classType option:selected").val(),
    Gender = $("#classGender option:selected").val(),
    pricePeriod = $("#price-period").val(),
    priceSession = $("#price-session").val(),
    type = $("#add-edit-type").val(),
    trainer = $("#trainer").val();

  // adding checked days to array
  $("[id^=day]").each(function() {
    if ($(this).is(":checked")) {
      var index = $(this)
          .attr("id")
          .replace("day", ""),
        parent = $(this).parents(".row"),
        hourFrom = parent.find("#hourFrom" + index).val(),
        hourTo = parent.find("#hourTo" + index).val();
      if (index == "0") {
        allDays = true;
      }
      days.push([index, hourFrom, hourTo]);
    }
  });

  if (allDays & (type == "add")) {
    hourFrom = days[0][1];
    hourTo = days[0][2];
    $("tbody")
      .find("tr td:nth-child(2)")
      .prepend(
        "<span  style='background-color:" +
          bg +
          "' class='classLabel' onClick='editClass($(this),event)' data-uniq='' data-trainer=" +
          trainer +
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
          hourFrom +
          " - " +
          hourTo +
          "<i class='mdi-navigation-close close-icon' onClick=removeParent($(this),event)></i>" +
          "</span>"
      );
    $("#modal-add input[type=text].valid").removeClass("valid");
  } else if (type == "add") {
    for (var i = 0; i < days.length; i++) {
      index = days[i][0];
      hourFrom = days[0][1];
      hourTo = days[i][2];
      console.log(days[i]);

      $("tbody")
        .find("tr[data-index='" + index + "'] td:nth-child(2)")
        .prepend(
          "<span  style='background-color:" +
            bg +
            "' class='classLabel' onClick='editClass($(this),event)' data-uniq='' data-trainer=" +
            trainer +
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
            hourFrom +
            " - " +
            hourTo +
            "<i class='mdi-navigation-close close-icon' onClick=removeParent($(this),event)></i>" +
            "</span>"
        );
    }

    $("#modal-add input[type=text].valid").removeClass("valid");
  } else {
    hourFrom = days[0][1];
    hourTo = days[0][2];
    var uniq = type.slice(5);
    $(".classLabel[data-uniq^='" + uniq + "']").replaceWith(
      "<span  style='background-color:" +
        bg +
        "' class='classLabel' onClick='editClass($(this),event)' data-uniq='' data-trainer=" +
        trainer +
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
        hourFrom +
        " - " +
        hourTo +
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

  var day = $(el)
      .parents("tr")
      .attr("data-index"),
    color = $(el).css("backgroundColor"),
    classType = $(el).attr("data-classType"),
    Gender = $(el).attr("data-Gender"),
    hourFrom = $(el).attr("data-hourFrom"),
    hourTo = $(el).attr("data-hourTo"),
    pricePeriod = $(el).attr("data-pricePeriod"),
    priceSession = $(el).attr("data-priceSession"),
    trainer = $(el).attr("data-trainer");

  $("#index-bg").val(color);
  $("#add-edit-type").val("edit_" + random);
  $("#classType").val(classType);
  $("#classGender").val(Gender);
  $("#price-period").val(pricePeriod);
  $("#price-session").val(priceSession);
  $("#trainer").val(trainer);

  $("[id^=hourFrom]")
    .val("")
    .attr("disabled", true);
  $("[id^=hourTo]")
    .val("")
    .attr("disabled", true);
  $("[id^=day]")
    .prop("checked", false)
    .prop("disabled", true);
  $("#day" + day)
    .prop("checked", true)
    .prop("disabled", false);
  $("#hourFrom" + day)
    .attr("disabled", false)
    .val(hourFrom);
  $("#hourTo" + day)
    .attr("disabled", false)
    .val(hourTo);

  $("#modal-add input").removeClass("valid");
  $("#classType").material_select();
  $("#classGender").material_select();
  Materialize.updateTextFields();

  $("#modal-add").openModal();
}

$("[id^=day]").on("change", function() {
  var index = $(this)
      .attr("id")
      .replace("day", ""),
    parent = $(this).parents(".row");
  if (index == 0) {
    if ($(this).is(":checked")) {
      for (var i = 1; i < 8; i++) {
        parent.find("#hourFrom" + i).attr("disabled", true);
        parent.find("#hourTo" + i).attr("disabled", true);
        parent.find("#day" + i).attr("checked", false);
      }
      parent.find("#hourFrom" + index).attr("disabled", false);
      parent.find("#hourTo" + index).attr("disabled", false);
    } else {
      parent.find("#hourFrom" + index).attr("disabled", true);
      parent.find("#hourTo" + index).attr("disabled", true);
    }
  } else if ($(this).is(":checked")) {
    parent.find("#hourFrom" + index).attr("disabled", false);
    parent.find("#hourTo" + index).attr("disabled", false);
    parent.find("#hourFrom0").attr("disabled", true);
    parent.find("#hourTo0").attr("disabled", true);
    parent.find("#day0").attr("checked", false);
  } else {
    parent.find("#hourFrom" + index).attr("disabled", true);
    parent.find("#hourTo" + index).attr("disabled", true);
  }
});

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
