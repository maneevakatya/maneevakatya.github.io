
$(function(){
	$("input.submit-btn").click(function(){
		var frm = $(this).closest("form");
		var name = $(frm.find(".zz_name input")[0]);
		var phone = $(frm.find(".zz_phone input")[0]);
		var email = $(frm.find(".zz_email input")[0]);
		var question = $(frm.find(".zz_question textarea")[0]);
		
		var strName = name.val() != undefined ? name.val() : "";
		var strPhone = phone.val() != undefined ? phone.val() : "";
		var strEmail = email.val() != undefined  ? email.val() : "";
			
		if (strName == "" && strPhone == "" && strEmail == "") return true;
		
		var type = frm.parent().find("h1").html();
		
		type = getType(type);
		
		var comment =  getPage(window.location.href) + " " + (question.val() != undefined ? question.val() : "");
		
		$.ajax({
			url:"../zoloterra.t8s.ru/StudyRequest/Add",
			data: {
				id:null, // Идентификатор заявки (используется только для обновления существующей заявки)
				fullName: strName,
				eMail: strEmail,
				phone: strPhone,
				type: type,
				firstCommunicationType:"Заявка с сайта", // Тип обращения
				description: comment,       
			},
			type:"GET",
			crossDomain:true,
			dataType:"jsonp",
			success:function (result) {
				if (result.errorType) console.log("Ошибка. Тип: " + result.errorType +" Сообщение: " + result.errorMessage);
				else console.log("Успешно: " + result.id);
			},
			error:function (jqXhr) {
				console.log("Ошибка: " + jqXhr.statusText +" (" + jqXhr.readyState +", " + jqXhr.status +", " + jqXhr.responseText +")");
			}
		});
		
		return true;
	});
	
	
	function getType(h1){
		if (h1 == "Заказ звонка") return "Заказ звонка";
		if (h1 == "Предварительная") return "Запись на курс";
		if (h1 == "Запись на бесплатный") return "Запись на пробный урок";
		if (h1 == "Задайте свой вопрос") return "Вопрос с сайта";
		if (h1 == "Запись на бесплатное") return "Запись на тестирование";
		if (h1 == "Уведомить о наборе") return "Уведомить о наборе группы";
		
		return "Неизвестный тип";
	}
	
	function getPage(page){
		
		if (page == "./" || page == "index.html" || page == "#nachalo" || page == "#vtoroi" || page == "index.html#nachalo" || page == "index.html#vtoroi") return "Главная страница";				
		if (page.indexOf("citycamp.html") > -1) return "Городской лагерь";
		if (page.indexOf("kids_4-6.html") > -1) return "Малыши";
		if (page.indexOf("kids_7-11.html") > -1) return "Дети";
		if (page.indexOf("kids_12-17.html") > -1) return "Подростки";
		if (page.indexOf("beginners.html") > -1) return "Начинающие с нуля";
		if (page.indexOf("middle.html") > -1) return "Средний уровень";
		if (page.indexOf("advanced.html") > -1) return "Продвинутый уровень";
		if (page.indexOf("individual.html") > -1) return "Индивидуальное обучение";
		if (page.indexOf("online.html") > -1) return "Онлайн обучение";
		if (page.indexOf("letstalk.html") > -1) return "Клуб общения";
		if (page.indexOf("exam.html") > -1) return "Подготовка к экзаменам";
		if (page.indexOf("business.html") > -1) return "Деловой английский";
		if (page.indexOf("open-day.html") > -1) return "День открытых дверей";
		if (page.indexOf("teachers.html") > -1) return "Преподаватели";
		
			return "Неизвестная страница";
	}
});