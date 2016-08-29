
        var _globalConfig = {

          // SWF inbound scripting policy: page domains that the SWF should trust.
          // (single string, or array of strings)
          trustedDomains: window.location.host ? [window.location.host] : [],

          // Include a "noCache" query parameter on requests for the SWF.
          cacheBust: true,

          // Enable use of the fancy "Desktop" clipboard, even on Linux where it is
          // known to suck.
          forceEnhancedClipboard: false,

          // How many milliseconds to wait for the Flash SWF to load and respond before assuming that
          // Flash is deactivated (e.g. click-to-play) in the user's browser. If you don't care about
          // how long it takes to load the SWF, you can set this to `null`.
          flashLoadTimeout: 30000,

          // Setting this to `false` would allow users to handle calling `ZeroClipboard.focus(...);`
          // themselves instead of relying on our per-element `mouseover` handler.
          autoActivate: true,

          // Bubble synthetic events in JavaScript after they are received by the Flash object.
          bubbleEvents: true,

          // Ensure OS-compliant line endings, i.e. "\r\n" on Windows, "\n" elsewhere
          fixLineEndings: true,

          // Sets the ID of the `div` encapsulating the Flash object.
          // Value is validated against the [HTML4 spec for `ID` tokens][valid_ids].
          containerId: "btn-clipboard",

          // Sets the class of the `div` encapsulating the Flash object.
          containerClass: "btn-clipboard",

          // Sets the ID and name of the Flash `object` element.
          // Value is validated against the [HTML4 spec for `ID` and `Name` tokens][valid_ids].
          swfObjectId: "global-zeroclipboard-flash-bridge",

          // The class used to indicate that a clipped element is being hovered over.
          hoverClass: "btn-clipboard-hover",

          // The class used to indicate that a clipped element is active (is being clicked).
          activeClass: "btn-clipboard-active",

          // Forcibly set the hand cursor ("pointer") for all clipped elements.
          // IMPORTANT: This configuration value CAN be modified while a SWF is actively embedded.
          forceHandCursor: false,

          // Sets the title of the `div` encapsulating the Flash object.
          // IMPORTANT: This configuration value CAN be modified while a SWF is actively embedded.
          title: null,

          // The z-index used by the Flash object.
          // Max value (32-bit): 2147483647.
          // IMPORTANT: This configuration value CAN be modified while a SWF is actively embedded.
          zIndex: 999999999

        };

        ZeroClipboard.config({
            _globalConfig
        });

    $('.docs_header').each(function () {
      var btnHtml = '<div class="zero-clipboard"><button class="btn btn-clipboard" data-clipboard-target="clipboard_pre">Copy</button></div>'
      $(this).before(btnHtml)
    });

    if (/MSIE|Trident/.test(window.navigator.userAgent)) {
      (function($) {
        var zcContainerId = ZeroClipboard.config('containerId');
        $('#' + zcContainerId).on('focusin', false);
      })(window.jQuery);
    }

      var client = new ZeroClipboard( $('.btn-clipboard') );

      client.on( 'ready', function(event) {
        console.log( 'movie is loaded' );

        client.on( 'copy', function(event) {
          // event.clipboardData.setData('text/plain', event.target.innerHTML);
            //var highlight = $(this).parent();
            //.nextAll('.highlight').first();
            //console.log"copied!");
            // client.target(highlight.text())

        } );

        client.on( 'aftercopy', function(event) {
          console.log('Copied text to clipboard: ' + event.data['text/plain']);

        } );
      } );

      client.on( 'error', function(event) {
         console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
        ZeroClipboard.destroy();
      } );


$('#tooltip').tooltip('show');






    // // Tooltip and popover demos
    // $('.tooltip-demo').tooltip({
    //   selector: '[data-toggle="tooltip"]',
    //   container: 'body'
    // });
    // $('.popover-demo').popover({
    //   selector: '[data-toggle="popover"]',
    //   container: 'body'
    // });

    // // // Demos within modals
    // $('.tooltip-test').tooltip();
    // $('.popover-test').popover();

//     // Config ZeroClipboard
//     ZeroClipboard.config({
//       hoverClass: 'btn-clipboard-hover',
//       //trustedDomains: ["*"],
//       trustedDomains: window.location.host ? [window.location.host] : ["*"],
//     });

//     // Insert copy to clipboard button before .docs_header
//     $('.docs_header').each(function () {
//       var btnHtml = '<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>'
//       $(this).before(btnHtml)
//     });

//     var zeroClipboard = new ZeroClipboard($('.btn-clipboard'));
// console.log(zeroClipboard.length);
//     var $htmlBridge = $('#global-zeroclipboard-html-bridge');

//     // Handlers for ZeroClipboard
//     zeroClipboard.on('load', function () {
//       console.log("loading...");
//       $htmlBridge
//         .data('placement', 'top')
//         .attr('title', 'Copy to clipboard')
//         .tooltip()


//       // Copy to clipboard
//       zeroClipboard.on('copy', function (client) {
//         console.log("data requested");
//         var highlight = $(this).parent().nextAll('.docs_header').first()
//         client.setText(highlight.text())
//       });


//       // Notify copy success and reset tooltip title
//       zeroClipboard.on('complete', function () {
//         console.log("complete");
//         $htmlBridge
//           .attr('title', 'Copied!')
//           .tooltip('fixTitle')
//           .tooltip('show')
//           .attr('title', 'Copy to clipboard')
//           .tooltip('fixTitle')
//       });
//     });

//     // Hide copy button when no Flash is found
//     // or wrong Flash version is present
//     zeroClipboard.on('noflash wrongflash', function () {
//         console.log("noflash destroy this thing!");
//       $('.zero-clipboard').remove()
//       ZeroClipboard.destroy()
//     })
