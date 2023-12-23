
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Student | Test </title>
    <link rel="stylesheet" href="../css/tailwind.css" />
</head>
<body>
    <main class="grid p-12 place-items-center bg-emerald-100">
        <form method="post" action="../controllers/QuestionsController.php" class="w-full max-w-sm p-6 space-y-6 border rounded shadow text-emerald-700 bg-black/10">
               <section id="questions-card" class="space-y-6">
           
              </section>
              <button type="submit">Send</button>
        </form>

    </main>
    <script>
        let currentQuestion = 0;
        let questions =[]
        
        document.addEventListener('DOMContentLoaded', function(){
            try{
                fetch('../controllers/QuestionsController.php').then((res)=> res.json()
                ).then((response)=>{
                    
                   questions = response
                   createQuestion()
                })
            }catch(e){
                throw Error(e.message)
            }
        })
        const createQuestion = () => {
           let questionsCard =document.querySelector('#questions-card')
         questions.forEach((question)=>{
             
             let questionCard = document.createElement('div')
              let questionContainer = document.createElement('h2')
              questionContainer.innerHTML =question.question
              questionContainer.classList.add('question')
              questionCard.appendChild(questionContainer)

              let choosesContainer = document.createElement('div')
              let chooses = JSON.parse(question.chooses)
              for(index in chooses ){
                 let chooseContainer = document.createElement('div')
                 let radioInput = document.createElement('input')
                 let Inputlabel = document.createElement('label')

                 Inputlabel.setAttribute('for',index)
                 Inputlabel.textContent = chooses[index]
                 radioInput.setAttribute('type', 'radio')
                 radioInput.setAttribute('id', index)
                 radioInput.setAttribute('name',question.id )
                 radioInput.setAttribute('value', index)
                 chooseContainer.appendChild(radioInput)
                 chooseContainer.appendChild(Inputlabel)
                 choosesContainer.appendChild(chooseContainer)
              }
              questionCard.appendChild(choosesContainer)
              questionsCard.appendChild(questionCard)


         })
        }
       
    </script>
</body>
</html>