$(document).ready(function() {
    var items = $('#content-slider .ad-notice'); // Select all content columns within the content-slider
    var showItems = 3; // Number of items to display at a time

    // Function to show/hide content columns based on the current index
    function showHideItems(startIndex) {
        items.hide(); // Hide all content columns
        items.slice(startIndex, startIndex + showItems).show(); // Show the selected range of columns
    }

    // Initially display the first set of content columns
    showHideItems(0); // Show the first set of content columns from the beginning

    // Function to handle the "Next" button click
    $('#nextBtn').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.last().index() + 1 <= items.length) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() + 1 : 0;
            showHideItems(startIndex); // Show the next set of content columns
        }
    });

    // Function to handle the "Previous" button click
    $('#prevBtn').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.first().index() - showItems >= 0) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() - showItems : 0;
            showHideItems(startIndex); // Show the previous set of content columns
        }
    });
});


$(document).ready(function() {
    var items = $('#content-slider2 .ad-notice2'); // Select all content columns within the content-slider
    var showItems = 3; // Number of items to display at a time

    // Function to show/hide content columns based on the current index
    function showHideItems(startIndex) {
        items.hide(); // Hide all content columns
        items.slice(startIndex, startIndex + showItems).show(); // Show the selected range of columns
    }

    // Initially display the first set of content columns
    showHideItems(0); // Show the first set of content columns from the beginning

    // Function to handle the "Next" button click
    $('#next2').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.last().index() + 1 <= items.length) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() + 1 : 0;
            showHideItems(startIndex); // Show the next set of content columns
        }
    });

    // Function to handle the "Previous" button click
    $('#prev2').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.first().index() - showItems >= 0) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() - showItems : 0;
            showHideItems(startIndex); // Show the previous set of content columns
        }
    });
});


$(document).ready(function() {
    var items = $('#content-slider3 .ad-notice3'); // Select all content columns within the content-slider
    var showItems = 3; // Number of items to display at a time

    // Function to show/hide content columns based on the current index
    function showHideItems(startIndex) {
        items.hide(); // Hide all content columns
        items.slice(startIndex, startIndex + showItems).show(); // Show the selected range of columns
    }

    // Initially display the first set of content columns
    showHideItems(0); // Show the first set of content columns from the beginning

    // Function to handle the "Next" button click
    $('#next3').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.last().index() + 1 <= items.length) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() + 1 : 0;
            showHideItems(startIndex); // Show the next set of content columns
        }
    });

    // Function to handle the "Previous" button click
    $('#prev3').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.first().index() - showItems >= 0) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() - showItems : 0;
            showHideItems(startIndex); // Show the previous set of content columns
        }
    });
});


$(document).ready(function() {
    var items = $('#content-slider4 .ad-notice4'); // Select all content columns within the content-slider
    var showItems = 3; // Number of items to display at a time

    // Function to show/hide content columns based on the current index
    function showHideItems(startIndex) {
        items.hide(); // Hide all content columns
        items.slice(startIndex, startIndex + showItems).show(); // Show the selected range of columns
    }

    // Initially display the first set of content columns
    showHideItems(0); // Show the first set of content columns from the beginning

    // Function to handle the "Next" button click
    $('#next4').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.last().index() + 1 <= items.length) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() + 1 : 0;
            showHideItems(startIndex); // Show the next set of content columns
        }
    });

    // Function to handle the "Previous" button click
    $('#prev4').on('click', function() {
        var visibleItems = items.filter(':visible');
        var totalVisible = visibleItems.length;
        if (totalVisible > 0 && visibleItems.first().index() - showItems >= 0) {
            var startIndex = totalVisible === showItems ? visibleItems.first().index() - showItems : 0;
            showHideItems(startIndex); // Show the previous set of content columns
        }
    });
});