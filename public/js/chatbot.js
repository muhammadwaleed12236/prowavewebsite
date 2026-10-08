/*
  PROWAVE TECHNOLOGIES - AI Software Consultant Chatbot Widget
  Provides interactive automated responses regarding business software suites & ERP solutions.
*/

document.addEventListener('DOMContentLoaded', () => {
  initChatbot();
});

function initChatbot() {
  const trigger = document.getElementById('chat-trigger');
  const panel = document.getElementById('chat-panel');
  const closeBtn = document.getElementById('chat-close');
  const sendBtn = document.getElementById('chat-send-btn');
  const inputEl = document.getElementById('chat-input-field');
  const msgContainer = document.getElementById('chat-msg-container');

  if (!trigger || !panel) return;

  trigger.addEventListener('click', () => {
    panel.classList.toggle('active');
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', () => panel.classList.remove('active'));
  }

  function appendMessage(text, isUser = false) {
    const bubble = document.createElement('div');
    bubble.className = `msg-bubble ${isUser ? 'msg-user' : 'msg-bot'}`;
    bubble.innerText = text;
    msgContainer.appendChild(bubble);
    msgContainer.scrollTop = msgContainer.scrollHeight;
  }

  function handleSend() {
    const text = inputEl.value.trim();
    if (!text) return;

    appendMessage(text, true);
    inputEl.value = '';

    // Simulate AI thinking typing delay
    setTimeout(() => {
      const reply = getAIResponse(text);
      appendMessage(reply, false);
    }, 600);
  }

  if (sendBtn && inputEl) {
    sendBtn.addEventListener('click', handleSend);
    inputEl.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') handleSend();
    });
  }

  // Pre-set Quick Chip Questions
  document.querySelectorAll('.chat-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      const q = chip.getAttribute('data-question');
      if (q) {
        inputEl.value = q;
        handleSend();
      }
    });
  });
}

function getAIResponse(query) {
  const q = query.toLowerCase();

  if (q.includes('textile') || q.includes('manufacturing') || q.includes('factory') || q.includes('production') || q.includes('loom')) {
    return "Our Textile & Manufacturing ERP is specialized for industrial plants! It features Raw Material BOM (Bill of Materials), loom & machine downtime tracking, production yield analytics, batch inventory, and automated cost accounting.";
  } else if (q.includes('pos') || q.includes('retail') || q.includes('inventory') || q.includes('shop')) {
    return "Our POS & Inventory System features high-speed barcode scanning, multi-counter billing, real-time stock alerts, profit/loss analytics, and multi-branch synchronization for retail chains and stores.";
  } else if (q.includes('crm') || q.includes('lead') || q.includes('customer') || q.includes('sales')) {
    return "Our CRM System automates lead tracking, sales deal pipelines, WhatsApp/email follow-up reminders, customer history, and team target management.";
  } else if (q.includes('restaurant') || q.includes('food') || q.includes('kitchen') || q.includes('cafe')) {
    return "Our Restaurant Management System includes Kitchen Display System (KDS), table order billing, recipe costing, rider tracking, and inventory depletion.";
  } else if (q.includes('pharmacy') || q.includes('medicine') || q.includes('salt') || q.includes('expiry')) {
    return "Our Pharmacy POS System handles batch expiry alerts, salt/formula search, supplier purchase orders, regulatory compliance, and fast prescription billing.";
  } else if (q.includes('distribution') || q.includes('distributor') || q.includes('recovery') || q.includes('route')) {
    return "Our Distribution Management System (DMS) enables field order booking via mobile app, distributor route management, credit & recovery tracking, and warehouse dispatch.";
  } else if (q.includes('clinic') || q.includes('hospital') || q.includes('patient') || q.includes('appointment')) {
    return "Our Clinic Management System manages patient EMR history, doctor appointment scheduling, lab test reports, billing, and automated SMS reminders.";
  } else if (q.includes('hr') || q.includes('payroll') || q.includes('attendance') || q.includes('salary')) {
    return "Our HR & Payroll System features biometric attendance integration, automated salary slips, loan/advance logs, leave approvals, and tax deductions.";
  } else if (q.includes('contact') || q.includes('call') || q.includes('whatsapp') || q.includes('phone')) {
    return "Call or WhatsApp our engineering team directly at +92 325 9385085 or email contact@prowave.tech for a custom software demo!";
  } else {
    return "Welcome to Prowave Technologies! We offer 10 specialized business software suites including Manufacturing ERP, POS, CRM, DMS, Clinic, and HR Systems. How can we help automate your business today?";
  }
}
