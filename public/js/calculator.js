/*
  PROWAVE TECHNOLOGIES - Project Scope & Timeline Estimator JS
  Calculates instant custom engineering timeline & complexity stack based on user selection.
*/

document.addEventListener('DOMContentLoaded', () => {
  initCalculator();
});

function initCalculator() {
  const platformBtns = document.querySelectorAll('.platform-btn');
  const featureChecks = document.querySelectorAll('.feature-check input');
  const quoteAmountEl = document.getElementById('calc-quote-amount');
  const quoteTimelineEl = document.getElementById('calc-quote-timeline');
  const calcBookBtn = document.getElementById('calc-book-btn');

  if (!quoteAmountEl) return;

  let baseWeeks = 4;
  let selectedPlatform = 'Custom Web Development';
  let complexityGrade = 'Standard Scope';

  // Platform selection handler
  platformBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      platformBtns.forEach(b => b.classList.remove('selected'));
      btn.classList.add('selected');

      baseWeeks = parseFloat(btn.getAttribute('data-base-weeks')) || 4;
      selectedPlatform = btn.getAttribute('data-platform-name');
      complexityGrade = btn.getAttribute('data-complexity') || 'Custom Solution';

      updateCalculation();
    });
  });

  // Feature checkboxes handler
  featureChecks.forEach(chk => {
    chk.addEventListener('change', () => {
      const parentLabel = chk.closest('.feature-check');
      if (chk.checked) {
        parentLabel.classList.add('checked');
      } else {
        parentLabel.classList.remove('checked');
      }
      updateCalculation();
    });
  });

  function updateCalculation() {
    let addWeeks = 0;
    let checkedCount = 0;

    featureChecks.forEach(chk => {
      if (chk.checked) {
        addWeeks += parseFloat(chk.getAttribute('data-weeks')) || 0;
        checkedCount++;
      }
    });

    const totalWeeks = Math.ceil(baseWeeks + addWeeks);
    let scopeLabel = 'Standard Scope';
    if (checkedCount >= 4) {
      scopeLabel = 'Enterprise Scale';
    } else if (checkedCount >= 2) {
      scopeLabel = 'Advanced Scope';
    }

    quoteAmountEl.innerText = scopeLabel;
    quoteTimelineEl.innerHTML = `<i class="far fa-clock" style="color:var(--accent-lime);"></i> Est. Timeline: <strong>${totalWeeks} - ${totalWeeks + 2} Weeks</strong> | Dedicated Product Team`;

    if (calcBookBtn) {
      calcBookBtn.setAttribute('data-estimate', `Est. Timeline: ${totalWeeks}-${totalWeeks + 2} weeks (${scopeLabel}) for ${selectedPlatform}`);
    }
  }

  // Pre-fill contact form on Request Custom Project Proposal click
  if (calcBookBtn) {
    calcBookBtn.addEventListener('click', () => {
      const estimateInfo = calcBookBtn.getAttribute('data-estimate');
      const contactMsg = document.getElementById('contact-message');
      const contactSection = document.getElementById('contact');

      if (contactMsg) {
        contactMsg.value = `Hi Prowave Engineering Team,\n\nI calculated an estimated engineering scope for my project:\nSpec: ${estimateInfo}.\n\nI would like to schedule a technical discovery call to discuss our business requirements and get a detailed proposal.`;
      }

      if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }
}
