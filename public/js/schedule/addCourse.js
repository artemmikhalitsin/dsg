$(document).ready(function () {
	$('.course').hide();
	$('.lecture').hide();
	$('.tutorial').hide();
	$('.lab').hide();
	$('.submitButton').hide();
	$('#semester').on('change', function(){
		var semester_id = $(this).val();

		$.ajax({
		    url: '/schedule/getCoursesList',
		    type: 'POST',
		    data: {
               semester_id: semester_id
            },
		    dataType: 'JSON',
		    success: function (data) {
		    	$('.course').show();
		    	$('.lecture').hide();
				$('.tutorial').hide();
				$('.lab').hide();
				$('.submitButton').hide();
		    	$('#course_code').empty();
		        $.each(data, function(index, course){
		        	$('#course_code').append('<option value="' + course.course_id + '">' + course.course_code + '</option>');
		        });
		        $('.selectpicker').selectpicker('refresh');
		    }
		});
	});
	$('#course_code').on('change', function(){
		var course_id = $(this).val();
		var semester_id = $('#semester').val();

		$.ajax({
		    url: '/schedule/getLecturesList',
		    type: 'POST',
		    data: {
               course_id: course_id,
               semester_id: semester_id
            },
		    dataType: 'JSON',
		    success: function (data) {
		    	$('.lecture').show();
	    		//console.log(data);
		        $('#lec').empty();
		        $('.tutorial').hide();
		        $('.lab').hide();
		        $('.submitButton').hide();
		        $.each(data, function(index, lecture){
		        	$('#lec').append('<option value="' + lecture.lecture_id + '">' + lecture.section + ' ' 
		        		+ lecture.day + ': ' + lecture.start_time + ' - ' + lecture.end_time + '</option>');
		        });
		        $('.selectpicker').selectpicker('refresh');
		    }
		});
	});
	$('#lec').on('change', function(){
		var lecture_id = $(this).val();

		$.ajax({
		    url: '/schedule/getTutorialsAndLabsList',
		    type: 'POST',
		    data: {
               lecture_id: lecture_id
            },
		    dataType: 'JSON',
		    success: function (data) {
		    	if (data.tutorials.length != 0) {
		    		$('.tutorial').show();
			        $('#tut').empty();
			        $('.lab').hide();
			        $.each(data.tutorials, function(index, tutorial){
			        	$('#tut').append('<option value="' + tutorial.tutorial_id + '">' + tutorial.section + ' ' 
			        		+ tutorial.day + ': ' + tutorial.start_time + ' - ' + tutorial.end_time + '</option>');
			        });
			        $('[name="tutorialExists"]').val('1');
			        $('.selectpicker').selectpicker('refresh');
		    	}
		    	if (data.labs.length != 0) {
		    		$('.lab').show();
		    		$('#lab').empty();
		    		$.each(data.labs, function(index, lab){
			        	$('#lab').append('<option value="' + lab.lab_id + '">' + lab.section + ' ' 
			        		+ lab.day + ': ' + lab.start_time + ' - ' + lab.end_time + '</option>');
			        });
			        $('[name="labExists"]').val('1');
			        $('.selectpicker').selectpicker('refresh');
		    	}
		    	$('.submitButton').show();
		    }
		});
	});
});