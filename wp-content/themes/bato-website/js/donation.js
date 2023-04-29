{
  const showDonation = popup => {
    popup.classList.remove('hidden')
  }

  const hideDonation = popup => {
    popup.classList.add('hidden')
  }

  window.addEventListener('load', () => {
    const popup = document.getElementById('donation-popup')
    if (!popup) return

    const isHidden = popup.classList.contains('hidden')
    if (isHidden) setTimeout(() => showDonation(popup), 3000)

    const close = document.getElementById('donation-popup-close')
    if (!close) return

    close.addEventListener('click', () => setTimeout(() => hideDonation(popup), 300))
  })
}
