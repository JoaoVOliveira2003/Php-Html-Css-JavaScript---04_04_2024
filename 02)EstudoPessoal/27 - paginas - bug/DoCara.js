/*APP.JS
import fetchFollowers from './fetchFollowers.js'
import displayFollowers from './displayFollowers.js'
import paginate from './paginate.js'
import displayButtons from './displayButtons.js'
const title = document.querySelector('.section-title h1')
const btnContainer = document.querySelector('.btn-container')

let index = 0
let pages = []

const setupUI = () => {
  displayFollowers(pages[index])
  displayButtons(btnContainer, pages, index)
}

const init = async () => {
  const followers = await fetchFollowers()
  title.textContent = 'pagination'
  pages = paginate(followers)
  setupUI()
}

btnContainer.addEventListener('click', function (e) {
  if (e.target.classList.contains('btn-container')) return
  if (e.target.classList.contains('page-btn')) {
    index = parseInt(e.target.dataset.index)
  }
  if (e.target.classList.contains('next-btn')) {
    index++
    if (index > pages.length - 1) {
      index = 0
    }
  }
  if (e.target.classList.contains('prev-btn')) {
    index--
    if (index < 0) {
      index = pages.length - 1
    }
  }
  setupUI()
})

window.addEventListener('load', init)

*/


/*DISPLAYbUTTONS.JS
const displayButtons = (container, pages, activeIndex) => {
  let btns = pages.map((_, pageIndex) => {
    return `<button class="page-btn ${
      activeIndex === pageIndex ? 'active-btn' : 'null '
    }" data-index="${pageIndex}">
${pageIndex + 1}
</button>`
  })
  btns.push(`<button class="next-btn">next</button>`)
  btns.unshift(`<button class="prev-btn">prev</button>`)
  container.innerHTML = btns.join('')
}

export default displayButtons

*/















/*displayFollowers.js
const container = document.querySelector('.container')

const display = (followers) => {
  const newFollowers = followers
    .map((person) => {
      const { avatar_url, login, html_url } = person
      return `
       <article class='card'>
         <img src="${avatar_url}" alt='person' />
           <h4>${login}</h4>
         <a href="${html_url}" class="btn">view profile</a>
       </article>
       `
    })
    .join('')
  container.innerHTML = newFollowers
}

export default  display
*/






/*fatchFollowes.js
const url = 'https://api.github.com/users/john-smilga/followers?per_page=100'

const fetchFollowers = async () => {
  const response = await fetch(url)
  const data = await response.json()
  return data
}

export default fetchFollowers
*/




/*paginate.js*/
const paginate = (followers) => {
  const itemsPerPage = 10
  const numberOfPages = Math.ceil(followers.length / itemsPerPage)

  const newFollowers = Array.from({ length: numberOfPages }, (_, index) => {
    const start = index * itemsPerPage
    return followers.slice(start, start + itemsPerPage)
  })
  return newFollowers
}

export default paginate
