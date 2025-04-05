from transformers import GPT2LMHeadModel, Trainer, TrainingArguments, GPT2LMHeadModel, GPT2Tokenizer
from datasets import load_dataset

# Load and tokenize the dataset
dataset = load_dataset('wikitext', 'wikitext-2-raw-v1')

# Define a tokenization function
def tokenize_function(examples):
    return tokenizer(examples['text'], padding='max_length', truncation=True)

# Tokenize the dataset
tokenizer = GPT2Tokenizer.from_pretrained("gpt2")
tokenized_datasets = dataset.map(tokenize_function, batched=True)

# Define train and evaluation datasets
train_dataset = tokenized_datasets['train']
eval_dataset = tokenized_datasets['validation']  # Use the validation split if available

# Define training arguments
training_args = TrainingArguments(
    output_dir='./results',
    num_train_epochs=3,
    per_device_train_batch_size=4,
    save_steps=10_000,
    save_total_limit=2,
)

# Initialize the Trainer
trainer = Trainer(
    model=model,
    args=training_args,
    train_dataset=train_dataset,
    eval_dataset=eval_dataset,  # Use the validation dataset for evaluation
)

# Start training
trainer.train()